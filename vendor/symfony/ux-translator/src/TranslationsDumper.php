<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Translator;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Translation\MessageCatalogueInterface;
use Symfony\UX\Translator\MessageParameters\Extractor\IntlMessageParametersExtractor;
use Symfony\UX\Translator\MessageParameters\Extractor\MessageParametersExtractor;
use Symfony\UX\Translator\MessageParameters\Printer\TypeScriptMessageParametersPrinter;

use function Symfony\Component\String\s;

/**
 * @author Hugo Alliaume <hugo@alliau.me>
 *
 * @final
 *
 * @experimental
 *
 * @phpstan-type Domain string
 * @phpstan-type Locale string
 * @phpstan-type MessageId string
 */
class TranslationsDumper
{
    private array $excludedDomains = [];
    private array $includedDomains = [];

    public function __construct(
        private string $dumpDir,
        private MessageParametersExtractor $messageParametersExtractor,
        private IntlMessageParametersExtractor $intlMessageParametersExtractor,
        private TypeScriptMessageParametersPrinter $typeScriptMessageParametersPrinter,
        private Filesystem $filesystem,
    ) {
    }

    public function dump(MessageCatalogueInterface ...$catalogues): void
    {
        $this->filesystem->mkdir($this->dumpDir);
        $this->filesystem->remove($this->dumpDir.'/index.js');
        $this->filesystem->remove($this->dumpDir.'/index.d.ts');
        $this->filesystem->remove($this->dumpDir.'/configuration.js');
        $this->filesystem->remove($this->dumpDir.'/configuration.d.ts');

        $translationsJs = '';
        $translationsTs = "import { Message, NoParametersType } from '@symfony/ux-translator';\n\n";

        foreach ($this->getTranslations(...$catalogues) as $translationId => $translationsByDomainAndLocale) {
            $constantName = $this->generateConstantName($translationId);

            $translationsJs .= \sprintf(
                "export const %s = %s;\n",
                $constantName,
                json_encode([
                    'id' => $translationId,
                    'translations' => $translationsByDomainAndLocale,
                ], \JSON_THROW_ON_ERROR),
            );
            $translationsTs .= \sprintf(
                "export declare const %s: %s;\n",
                $constantName,
                $this->getTranslationsTypeScriptTypeDefinition($translationsByDomainAndLocale)
            );
        }

        $this->filesystem->dumpFile($this->dumpDir.'/index.js', $translationsJs);
        $this->filesystem->dumpFile($this->dumpDir.'/index.d.ts', $translationsTs);
        $this->filesystem->dumpFile($this->dumpDir.'/configuration.js', \sprintf(
            "export const localeFallbacks = %s;\n",
            json_encode($this->getLocaleFallbacks(...$catalogues), \JSON_THROW_ON_ERROR)
        ));
        $this->filesystem->dumpFile($this->dumpDir.'/configuration.d.ts', <<<'TS'
import { LocaleType } from '@symfony/ux-translator';

export declare const localeFallbacks: Record<LocaleType, LocaleType>;
TS
        );
    }

    public function addExcludedDomain(string $domain): void
    {
        if ($this->includedDomains) {
            throw new \LogicException('You cannot set both "excluded_domains" and "included_domains" at the same time.');
        }
        $this->excludedDomains[] = $domain;
    }

    public function addIncludedDomain(string $domain): void
    {
        if ($this->excludedDomains) {
            throw new \LogicException('You cannot set both "excluded_domains" and "included_domains" at the same time.');
        }
        $this->includedDomains[] = $domain;
    }

    /**
     * @return array<MessageId, array<Domain, array<Locale, string>>>
     */
    private function getTranslations(MessageCatalogueInterface ...$catalogues): array
    {
        $translations = [];

        foreach ($catalogues as $catalogue) {
            $locale = $catalogue->getLocale();
            foreach ($catalogue->getDomains() as $domain) {
                if (\in_array($domain, $this->excludedDomains, true)) {
                    continue;
                }
                if ($this->includedDomains && !\in_array($domain, $this->includedDomains, true)) {
                    continue;
                }
                foreach ($catalogue->all($domain) as $id => $message) {
                    $realDomain = $catalogue->has($id, $domain.MessageCatalogueInterface::INTL_DOMAIN_SUFFIX)
                        ? $domain.MessageCatalogueInterface::INTL_DOMAIN_SUFFIX
                        : $domain;

                    $translations[$id] ??= [];
                    $translations[$id][$realDomain] ??= [];
                    $translations[$id][$realDomain][$locale] = $message;
                }
            }
        }

        return $translations;
    }

    /**
     * @param array<Domain, array<Locale, string>> $translationsByDomainAndLocale
     *
     * @throws \Exception
     */
    private function getTranslationsTypeScriptTypeDefinition(array $translationsByDomainAndLocale): string
    {
        $parametersTypes = [];
        $locales = [];

        foreach ($translationsByDomainAndLocale as $domain => $translationsByLocale) {
            foreach ($translationsByLocale as $locale => $translation) {
                try {
                    $parameters = str_ends_with($domain, MessageCatalogueInterface::INTL_DOMAIN_SUFFIX)
                        ? $this->intlMessageParametersExtractor->extract($translation)
                        : $this->messageParametersExtractor->extract($translation);
                } catch (\Throwable $e) {
                    throw new \Exception(\sprintf('Error while extracting parameters from message "%s" in domain "%s" and locale "%s".', $translation, $domain, $locale), previous: $e);
                }

                $parametersTypes[$domain] = $this->typeScriptMessageParametersPrinter->print($parameters);
                $locales[] = $locale;
            }
        }

        $typeScriptParametersType = [];
        foreach ($parametersTypes as $domain => $parametersType) {
            $typeScriptParametersType[] = \sprintf("'%s': { parameters: %s }", $domain, $parametersType);
        }

        return \sprintf(
            'Message<{ %s }, %s>',
            implode(', ', $typeScriptParametersType),
            implode('|', array_map(fn (string $locale) => "'$locale'", array_unique($locales))),
        );
    }

    private function getLocaleFallbacks(MessageCatalogueInterface ...$catalogues): array
    {
        $localesFallbacks = [];

        foreach ($catalogues as $catalogue) {
            $localesFallbacks[$catalogue->getLocale()] = $catalogue->getFallbackCatalogue()?->getLocale();
        }

        return $localesFallbacks;
    }

    private function generateConstantName(string $translationId): string
    {
        static $alreadyGenerated = [];

        $translationId = s($translationId)->ascii()->snake()->upper()->replaceMatches('/^(\d)/', '_$1')->toString();
        $prefix = 0;
        do {
            $constantName = $translationId.($prefix > 0 ? '_'.$prefix : '');
            ++$prefix;
        } while ($alreadyGenerated[$constantName] ?? false);

        $alreadyGenerated[$constantName] = true;

        return $constantName;
    }
}
