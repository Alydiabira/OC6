<?php

namespace App\Twig\Extension;

use Symfony\Component\Intl\Locales;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * AppExtension provides custom Twig functions for managing locales.
 * It returns the list of enabled locales with their names in the respective language.
 */
final class AppExtension extends AbstractExtension
{
    /**
     * @var array<int, array{code: string, name: string}>|null
     */
    private ?array $locales = null;

    /**
     * Constructor to inject the enabled locales into the extension.
     *
     * @param string[] $enabledLocales
     * @param TranslatorInterface $translator
     */
    public function __construct(
        private readonly array $enabledLocales,
        private readonly TranslatorInterface $translator
    ) {
    }

    /**
     * Returns an array of Twig functions for the extension.
     *
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('locales', [$this, 'getLocales']),
        ];
    }

    /**
     * Retrieves the list of enabled locales with their names in the desired language.
     *
     * @return array<int, array{code: string, name: string}> List of locales with their names.
     */
    public function getLocales(): array
    {
        // Cache the locales list if already calculated
        if ($this->locales !== null) {
            return $this->locales;
        }

        // Initialize locales array
        $this->locales = [];

        foreach ($this->enabledLocales as $localeCode) {
            try {
                // Get the name of the locale in the given locale
                $localeName = Locales::getName($localeCode, $localeCode) ?: $localeCode;

                // Add the locale to the list
                $this->locales[] = [
                    'code' => $localeCode,
                    'name' => $this->translator->trans($localeName, [], 'locales'),
                ];
            } catch (\Exception $e) {
                // Handle error, logging can be added here if needed
                $this->locales[] = [
                    'code' => $localeCode,
                    'name' => $localeCode, // Fallback to the locale code on failure
                ];
            }
        }

        return $this->locales;
    }
}
