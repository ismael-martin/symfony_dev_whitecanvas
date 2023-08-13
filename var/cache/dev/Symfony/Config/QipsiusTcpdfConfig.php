<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'QipsiusTcpdf'.\DIRECTORY_SEPARATOR.'TcpdfConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class QipsiusTcpdfConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $file;
    private $class;
    private $tcpdf;
    private $_usedProperties = [];

    /**
     * @default '%kernel.project_dir%/vendor/tecnickcom/tcpdf/tcpdf.php'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function file($value): self
    {
        $this->_usedProperties['file'] = true;
        $this->file = $value;

        return $this;
    }

    /**
     * @default 'TCPDF'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function class($value): self
    {
        $this->_usedProperties['class'] = true;
        $this->class = $value;

        return $this;
    }

    public function tcpdf(array $value = []): \Symfony\Config\QipsiusTcpdf\TcpdfConfig
    {
        if (null === $this->tcpdf) {
            $this->_usedProperties['tcpdf'] = true;
            $this->tcpdf = new \Symfony\Config\QipsiusTcpdf\TcpdfConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tcpdf()" has already been initialized. You cannot pass values the second time you call tcpdf().');
        }

        return $this->tcpdf;
    }

    public function getExtensionAlias(): string
    {
        return 'qipsius_tcpdf';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('file', $value)) {
            $this->_usedProperties['file'] = true;
            $this->file = $value['file'];
            unset($value['file']);
        }

        if (array_key_exists('class', $value)) {
            $this->_usedProperties['class'] = true;
            $this->class = $value['class'];
            unset($value['class']);
        }

        if (array_key_exists('tcpdf', $value)) {
            $this->_usedProperties['tcpdf'] = true;
            $this->tcpdf = new \Symfony\Config\QipsiusTcpdf\TcpdfConfig($value['tcpdf']);
            unset($value['tcpdf']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['file'])) {
            $output['file'] = $this->file;
        }
        if (isset($this->_usedProperties['class'])) {
            $output['class'] = $this->class;
        }
        if (isset($this->_usedProperties['tcpdf'])) {
            $output['tcpdf'] = $this->tcpdf->toArray();
        }

        return $output;
    }

}
