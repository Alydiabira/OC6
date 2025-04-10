<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'UxTranslator'.\DIRECTORY_SEPARATOR.'DomainsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UxTranslatorConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $dumpDirectory;
    private $domains;
    private $_usedProperties = [];

    /**
     * @default '%kernel.project_dir%/var/translations'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dumpDirectory($value): static
    {
        $this->_usedProperties['dumpDirectory'] = true;
        $this->dumpDirectory = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * List of domains to include/exclude from the generated translations. Prefix with a `!` to exclude a domain.
     * @return \Symfony\Config\UxTranslator\DomainsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\UxTranslator\DomainsConfig : static)
     */
    public function domains(mixed $value = []): \Symfony\Config\UxTranslator\DomainsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['domains'] = true;
            $this->domains = $value;

            return $this;
        }

        if (!$this->domains instanceof \Symfony\Config\UxTranslator\DomainsConfig) {
            $this->_usedProperties['domains'] = true;
            $this->domains = new \Symfony\Config\UxTranslator\DomainsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "domains()" has already been initialized. You cannot pass values the second time you call domains().');
        }

        return $this->domains;
    }

    public function getExtensionAlias(): string
    {
        return 'ux_translator';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('dump_directory', $value)) {
            $this->_usedProperties['dumpDirectory'] = true;
            $this->dumpDirectory = $value['dump_directory'];
            unset($value['dump_directory']);
        }

        if (array_key_exists('domains', $value)) {
            $this->_usedProperties['domains'] = true;
            $this->domains = \is_array($value['domains']) ? new \Symfony\Config\UxTranslator\DomainsConfig($value['domains']) : $value['domains'];
            unset($value['domains']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['dumpDirectory'])) {
            $output['dump_directory'] = $this->dumpDirectory;
        }
        if (isset($this->_usedProperties['domains'])) {
            $output['domains'] = $this->domains instanceof \Symfony\Config\UxTranslator\DomainsConfig ? $this->domains->toArray() : $this->domains;
        }

        return $output;
    }

}
