<?php

namespace Symfony\Config\QipsiusTcpdf;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TcpdfConfig 
{
    private $kPathUrl;
    private $kPathMain;
    private $kPathFonts;
    private $kPathCache;
    private $kPathUrlCache;
    private $kPathImages;
    private $kBlankImage;
    private $kCellHeightRatio;
    private $kTitleMagnification;
    private $kSmallRatio;
    private $kThaiTopchars;
    private $kTcpdfCallsInHtml;
    private $kTcpdfExternalConfig;
    private $kTcpdfThrowExceptionError;
    private $headMagnification;
    private $pdfPageFormat;
    private $pdfPageOrientation;
    private $pdfCreator;
    private $pdfAuthor;
    private $pdfHeaderTitle;
    private $pdfHeaderString;
    private $pdfHeaderLogo;
    private $pdfHeaderLogoWidth;
    private $pdfUnit;
    private $pdfMarginHeader;
    private $pdfMarginFooter;
    private $pdfMarginTop;
    private $pdfMarginBottom;
    private $pdfMarginLeft;
    private $pdfMarginRight;
    private $pdfFontNameMain;
    private $pdfFontSizeMain;
    private $pdfFontNameData;
    private $pdfFontSizeData;
    private $pdfFontMonospaced;
    private $pdfImageScaleRatio;
    private $_usedProperties = [];

    /**
     * @default '%kernel.project_dir%/vendor/tecnickcom/tcpdf/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kPathUrl($value): self
    {
        $this->_usedProperties['kPathUrl'] = true;
        $this->kPathUrl = $value;

        return $this;
    }

    /**
     * @default '%kernel.project_dir%/vendor/tecnickcom/tcpdf/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kPathMain($value): self
    {
        $this->_usedProperties['kPathMain'] = true;
        $this->kPathMain = $value;

        return $this;
    }

    /**
     * @default '%kernel.project_dir%/vendor/tecnickcom/tcpdf/fonts/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kPathFonts($value): self
    {
        $this->_usedProperties['kPathFonts'] = true;
        $this->kPathFonts = $value;

        return $this;
    }

    /**
     * @default '%kernel.cache_dir%/tcpdf'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kPathCache($value): self
    {
        $this->_usedProperties['kPathCache'] = true;
        $this->kPathCache = $value;

        return $this;
    }

    /**
     * @default '%kernel.cache_dir%/tcpdf'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kPathUrlCache($value): self
    {
        $this->_usedProperties['kPathUrlCache'] = true;
        $this->kPathUrlCache = $value;

        return $this;
    }

    /**
     * @default '%kernel.project_dir%/vendor/tecnickcom/tcpdf/examples/images/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kPathImages($value): self
    {
        $this->_usedProperties['kPathImages'] = true;
        $this->kPathImages = $value;

        return $this;
    }

    /**
     * @default '%kernel.project_dir%/vendor/tecnickcom/tcpdf/examples/images/_blank.png'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kBlankImage($value): self
    {
        $this->_usedProperties['kBlankImage'] = true;
        $this->kBlankImage = $value;

        return $this;
    }

    /**
     * @default 1.25
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kCellHeightRatio($value): self
    {
        $this->_usedProperties['kCellHeightRatio'] = true;
        $this->kCellHeightRatio = $value;

        return $this;
    }

    /**
     * @default 1.3
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kTitleMagnification($value): self
    {
        $this->_usedProperties['kTitleMagnification'] = true;
        $this->kTitleMagnification = $value;

        return $this;
    }

    /**
     * @default 0.6666666666666666
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kSmallRatio($value): self
    {
        $this->_usedProperties['kSmallRatio'] = true;
        $this->kSmallRatio = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kThaiTopchars($value): self
    {
        $this->_usedProperties['kThaiTopchars'] = true;
        $this->kThaiTopchars = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kTcpdfCallsInHtml($value): self
    {
        $this->_usedProperties['kTcpdfCallsInHtml'] = true;
        $this->kTcpdfCallsInHtml = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kTcpdfExternalConfig($value): self
    {
        $this->_usedProperties['kTcpdfExternalConfig'] = true;
        $this->kTcpdfExternalConfig = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function kTcpdfThrowExceptionError($value): self
    {
        $this->_usedProperties['kTcpdfThrowExceptionError'] = true;
        $this->kTcpdfThrowExceptionError = $value;

        return $this;
    }

    /**
     * @default 1.1
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function headMagnification($value): self
    {
        $this->_usedProperties['headMagnification'] = true;
        $this->headMagnification = $value;

        return $this;
    }

    /**
     * @default 'A4'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfPageFormat($value): self
    {
        $this->_usedProperties['pdfPageFormat'] = true;
        $this->pdfPageFormat = $value;

        return $this;
    }

    /**
     * @default 'P'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfPageOrientation($value): self
    {
        $this->_usedProperties['pdfPageOrientation'] = true;
        $this->pdfPageOrientation = $value;

        return $this;
    }

    /**
     * @default 'TCPDF'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfCreator($value): self
    {
        $this->_usedProperties['pdfCreator'] = true;
        $this->pdfCreator = $value;

        return $this;
    }

    /**
     * @default 'TCPDF'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfAuthor($value): self
    {
        $this->_usedProperties['pdfAuthor'] = true;
        $this->pdfAuthor = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfHeaderTitle($value): self
    {
        $this->_usedProperties['pdfHeaderTitle'] = true;
        $this->pdfHeaderTitle = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfHeaderString($value): self
    {
        $this->_usedProperties['pdfHeaderString'] = true;
        $this->pdfHeaderString = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfHeaderLogo($value): self
    {
        $this->_usedProperties['pdfHeaderLogo'] = true;
        $this->pdfHeaderLogo = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfHeaderLogoWidth($value): self
    {
        $this->_usedProperties['pdfHeaderLogoWidth'] = true;
        $this->pdfHeaderLogoWidth = $value;

        return $this;
    }

    /**
     * @default 'mm'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfUnit($value): self
    {
        $this->_usedProperties['pdfUnit'] = true;
        $this->pdfUnit = $value;

        return $this;
    }

    /**
     * @default 5
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfMarginHeader($value): self
    {
        $this->_usedProperties['pdfMarginHeader'] = true;
        $this->pdfMarginHeader = $value;

        return $this;
    }

    /**
     * @default 10
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfMarginFooter($value): self
    {
        $this->_usedProperties['pdfMarginFooter'] = true;
        $this->pdfMarginFooter = $value;

        return $this;
    }

    /**
     * @default 27
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfMarginTop($value): self
    {
        $this->_usedProperties['pdfMarginTop'] = true;
        $this->pdfMarginTop = $value;

        return $this;
    }

    /**
     * @default 25
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfMarginBottom($value): self
    {
        $this->_usedProperties['pdfMarginBottom'] = true;
        $this->pdfMarginBottom = $value;

        return $this;
    }

    /**
     * @default 15
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfMarginLeft($value): self
    {
        $this->_usedProperties['pdfMarginLeft'] = true;
        $this->pdfMarginLeft = $value;

        return $this;
    }

    /**
     * @default 15
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfMarginRight($value): self
    {
        $this->_usedProperties['pdfMarginRight'] = true;
        $this->pdfMarginRight = $value;

        return $this;
    }

    /**
     * @default 'helvetica'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfFontNameMain($value): self
    {
        $this->_usedProperties['pdfFontNameMain'] = true;
        $this->pdfFontNameMain = $value;

        return $this;
    }

    /**
     * @default 10
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfFontSizeMain($value): self
    {
        $this->_usedProperties['pdfFontSizeMain'] = true;
        $this->pdfFontSizeMain = $value;

        return $this;
    }

    /**
     * @default 'helvetica'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfFontNameData($value): self
    {
        $this->_usedProperties['pdfFontNameData'] = true;
        $this->pdfFontNameData = $value;

        return $this;
    }

    /**
     * @default 8
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfFontSizeData($value): self
    {
        $this->_usedProperties['pdfFontSizeData'] = true;
        $this->pdfFontSizeData = $value;

        return $this;
    }

    /**
     * @default 'courier'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfFontMonospaced($value): self
    {
        $this->_usedProperties['pdfFontMonospaced'] = true;
        $this->pdfFontMonospaced = $value;

        return $this;
    }

    /**
     * @default 1.25
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pdfImageScaleRatio($value): self
    {
        $this->_usedProperties['pdfImageScaleRatio'] = true;
        $this->pdfImageScaleRatio = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('k_path_url', $value)) {
            $this->_usedProperties['kPathUrl'] = true;
            $this->kPathUrl = $value['k_path_url'];
            unset($value['k_path_url']);
        }

        if (array_key_exists('k_path_main', $value)) {
            $this->_usedProperties['kPathMain'] = true;
            $this->kPathMain = $value['k_path_main'];
            unset($value['k_path_main']);
        }

        if (array_key_exists('k_path_fonts', $value)) {
            $this->_usedProperties['kPathFonts'] = true;
            $this->kPathFonts = $value['k_path_fonts'];
            unset($value['k_path_fonts']);
        }

        if (array_key_exists('k_path_cache', $value)) {
            $this->_usedProperties['kPathCache'] = true;
            $this->kPathCache = $value['k_path_cache'];
            unset($value['k_path_cache']);
        }

        if (array_key_exists('k_path_url_cache', $value)) {
            $this->_usedProperties['kPathUrlCache'] = true;
            $this->kPathUrlCache = $value['k_path_url_cache'];
            unset($value['k_path_url_cache']);
        }

        if (array_key_exists('k_path_images', $value)) {
            $this->_usedProperties['kPathImages'] = true;
            $this->kPathImages = $value['k_path_images'];
            unset($value['k_path_images']);
        }

        if (array_key_exists('k_blank_image', $value)) {
            $this->_usedProperties['kBlankImage'] = true;
            $this->kBlankImage = $value['k_blank_image'];
            unset($value['k_blank_image']);
        }

        if (array_key_exists('k_cell_height_ratio', $value)) {
            $this->_usedProperties['kCellHeightRatio'] = true;
            $this->kCellHeightRatio = $value['k_cell_height_ratio'];
            unset($value['k_cell_height_ratio']);
        }

        if (array_key_exists('k_title_magnification', $value)) {
            $this->_usedProperties['kTitleMagnification'] = true;
            $this->kTitleMagnification = $value['k_title_magnification'];
            unset($value['k_title_magnification']);
        }

        if (array_key_exists('k_small_ratio', $value)) {
            $this->_usedProperties['kSmallRatio'] = true;
            $this->kSmallRatio = $value['k_small_ratio'];
            unset($value['k_small_ratio']);
        }

        if (array_key_exists('k_thai_topchars', $value)) {
            $this->_usedProperties['kThaiTopchars'] = true;
            $this->kThaiTopchars = $value['k_thai_topchars'];
            unset($value['k_thai_topchars']);
        }

        if (array_key_exists('k_tcpdf_calls_in_html', $value)) {
            $this->_usedProperties['kTcpdfCallsInHtml'] = true;
            $this->kTcpdfCallsInHtml = $value['k_tcpdf_calls_in_html'];
            unset($value['k_tcpdf_calls_in_html']);
        }

        if (array_key_exists('k_tcpdf_external_config', $value)) {
            $this->_usedProperties['kTcpdfExternalConfig'] = true;
            $this->kTcpdfExternalConfig = $value['k_tcpdf_external_config'];
            unset($value['k_tcpdf_external_config']);
        }

        if (array_key_exists('k_tcpdf_throw_exception_error', $value)) {
            $this->_usedProperties['kTcpdfThrowExceptionError'] = true;
            $this->kTcpdfThrowExceptionError = $value['k_tcpdf_throw_exception_error'];
            unset($value['k_tcpdf_throw_exception_error']);
        }

        if (array_key_exists('head_magnification', $value)) {
            $this->_usedProperties['headMagnification'] = true;
            $this->headMagnification = $value['head_magnification'];
            unset($value['head_magnification']);
        }

        if (array_key_exists('pdf_page_format', $value)) {
            $this->_usedProperties['pdfPageFormat'] = true;
            $this->pdfPageFormat = $value['pdf_page_format'];
            unset($value['pdf_page_format']);
        }

        if (array_key_exists('pdf_page_orientation', $value)) {
            $this->_usedProperties['pdfPageOrientation'] = true;
            $this->pdfPageOrientation = $value['pdf_page_orientation'];
            unset($value['pdf_page_orientation']);
        }

        if (array_key_exists('pdf_creator', $value)) {
            $this->_usedProperties['pdfCreator'] = true;
            $this->pdfCreator = $value['pdf_creator'];
            unset($value['pdf_creator']);
        }

        if (array_key_exists('pdf_author', $value)) {
            $this->_usedProperties['pdfAuthor'] = true;
            $this->pdfAuthor = $value['pdf_author'];
            unset($value['pdf_author']);
        }

        if (array_key_exists('pdf_header_title', $value)) {
            $this->_usedProperties['pdfHeaderTitle'] = true;
            $this->pdfHeaderTitle = $value['pdf_header_title'];
            unset($value['pdf_header_title']);
        }

        if (array_key_exists('pdf_header_string', $value)) {
            $this->_usedProperties['pdfHeaderString'] = true;
            $this->pdfHeaderString = $value['pdf_header_string'];
            unset($value['pdf_header_string']);
        }

        if (array_key_exists('pdf_header_logo', $value)) {
            $this->_usedProperties['pdfHeaderLogo'] = true;
            $this->pdfHeaderLogo = $value['pdf_header_logo'];
            unset($value['pdf_header_logo']);
        }

        if (array_key_exists('pdf_header_logo_width', $value)) {
            $this->_usedProperties['pdfHeaderLogoWidth'] = true;
            $this->pdfHeaderLogoWidth = $value['pdf_header_logo_width'];
            unset($value['pdf_header_logo_width']);
        }

        if (array_key_exists('pdf_unit', $value)) {
            $this->_usedProperties['pdfUnit'] = true;
            $this->pdfUnit = $value['pdf_unit'];
            unset($value['pdf_unit']);
        }

        if (array_key_exists('pdf_margin_header', $value)) {
            $this->_usedProperties['pdfMarginHeader'] = true;
            $this->pdfMarginHeader = $value['pdf_margin_header'];
            unset($value['pdf_margin_header']);
        }

        if (array_key_exists('pdf_margin_footer', $value)) {
            $this->_usedProperties['pdfMarginFooter'] = true;
            $this->pdfMarginFooter = $value['pdf_margin_footer'];
            unset($value['pdf_margin_footer']);
        }

        if (array_key_exists('pdf_margin_top', $value)) {
            $this->_usedProperties['pdfMarginTop'] = true;
            $this->pdfMarginTop = $value['pdf_margin_top'];
            unset($value['pdf_margin_top']);
        }

        if (array_key_exists('pdf_margin_bottom', $value)) {
            $this->_usedProperties['pdfMarginBottom'] = true;
            $this->pdfMarginBottom = $value['pdf_margin_bottom'];
            unset($value['pdf_margin_bottom']);
        }

        if (array_key_exists('pdf_margin_left', $value)) {
            $this->_usedProperties['pdfMarginLeft'] = true;
            $this->pdfMarginLeft = $value['pdf_margin_left'];
            unset($value['pdf_margin_left']);
        }

        if (array_key_exists('pdf_margin_right', $value)) {
            $this->_usedProperties['pdfMarginRight'] = true;
            $this->pdfMarginRight = $value['pdf_margin_right'];
            unset($value['pdf_margin_right']);
        }

        if (array_key_exists('pdf_font_name_main', $value)) {
            $this->_usedProperties['pdfFontNameMain'] = true;
            $this->pdfFontNameMain = $value['pdf_font_name_main'];
            unset($value['pdf_font_name_main']);
        }

        if (array_key_exists('pdf_font_size_main', $value)) {
            $this->_usedProperties['pdfFontSizeMain'] = true;
            $this->pdfFontSizeMain = $value['pdf_font_size_main'];
            unset($value['pdf_font_size_main']);
        }

        if (array_key_exists('pdf_font_name_data', $value)) {
            $this->_usedProperties['pdfFontNameData'] = true;
            $this->pdfFontNameData = $value['pdf_font_name_data'];
            unset($value['pdf_font_name_data']);
        }

        if (array_key_exists('pdf_font_size_data', $value)) {
            $this->_usedProperties['pdfFontSizeData'] = true;
            $this->pdfFontSizeData = $value['pdf_font_size_data'];
            unset($value['pdf_font_size_data']);
        }

        if (array_key_exists('pdf_font_monospaced', $value)) {
            $this->_usedProperties['pdfFontMonospaced'] = true;
            $this->pdfFontMonospaced = $value['pdf_font_monospaced'];
            unset($value['pdf_font_monospaced']);
        }

        if (array_key_exists('pdf_image_scale_ratio', $value)) {
            $this->_usedProperties['pdfImageScaleRatio'] = true;
            $this->pdfImageScaleRatio = $value['pdf_image_scale_ratio'];
            unset($value['pdf_image_scale_ratio']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['kPathUrl'])) {
            $output['k_path_url'] = $this->kPathUrl;
        }
        if (isset($this->_usedProperties['kPathMain'])) {
            $output['k_path_main'] = $this->kPathMain;
        }
        if (isset($this->_usedProperties['kPathFonts'])) {
            $output['k_path_fonts'] = $this->kPathFonts;
        }
        if (isset($this->_usedProperties['kPathCache'])) {
            $output['k_path_cache'] = $this->kPathCache;
        }
        if (isset($this->_usedProperties['kPathUrlCache'])) {
            $output['k_path_url_cache'] = $this->kPathUrlCache;
        }
        if (isset($this->_usedProperties['kPathImages'])) {
            $output['k_path_images'] = $this->kPathImages;
        }
        if (isset($this->_usedProperties['kBlankImage'])) {
            $output['k_blank_image'] = $this->kBlankImage;
        }
        if (isset($this->_usedProperties['kCellHeightRatio'])) {
            $output['k_cell_height_ratio'] = $this->kCellHeightRatio;
        }
        if (isset($this->_usedProperties['kTitleMagnification'])) {
            $output['k_title_magnification'] = $this->kTitleMagnification;
        }
        if (isset($this->_usedProperties['kSmallRatio'])) {
            $output['k_small_ratio'] = $this->kSmallRatio;
        }
        if (isset($this->_usedProperties['kThaiTopchars'])) {
            $output['k_thai_topchars'] = $this->kThaiTopchars;
        }
        if (isset($this->_usedProperties['kTcpdfCallsInHtml'])) {
            $output['k_tcpdf_calls_in_html'] = $this->kTcpdfCallsInHtml;
        }
        if (isset($this->_usedProperties['kTcpdfExternalConfig'])) {
            $output['k_tcpdf_external_config'] = $this->kTcpdfExternalConfig;
        }
        if (isset($this->_usedProperties['kTcpdfThrowExceptionError'])) {
            $output['k_tcpdf_throw_exception_error'] = $this->kTcpdfThrowExceptionError;
        }
        if (isset($this->_usedProperties['headMagnification'])) {
            $output['head_magnification'] = $this->headMagnification;
        }
        if (isset($this->_usedProperties['pdfPageFormat'])) {
            $output['pdf_page_format'] = $this->pdfPageFormat;
        }
        if (isset($this->_usedProperties['pdfPageOrientation'])) {
            $output['pdf_page_orientation'] = $this->pdfPageOrientation;
        }
        if (isset($this->_usedProperties['pdfCreator'])) {
            $output['pdf_creator'] = $this->pdfCreator;
        }
        if (isset($this->_usedProperties['pdfAuthor'])) {
            $output['pdf_author'] = $this->pdfAuthor;
        }
        if (isset($this->_usedProperties['pdfHeaderTitle'])) {
            $output['pdf_header_title'] = $this->pdfHeaderTitle;
        }
        if (isset($this->_usedProperties['pdfHeaderString'])) {
            $output['pdf_header_string'] = $this->pdfHeaderString;
        }
        if (isset($this->_usedProperties['pdfHeaderLogo'])) {
            $output['pdf_header_logo'] = $this->pdfHeaderLogo;
        }
        if (isset($this->_usedProperties['pdfHeaderLogoWidth'])) {
            $output['pdf_header_logo_width'] = $this->pdfHeaderLogoWidth;
        }
        if (isset($this->_usedProperties['pdfUnit'])) {
            $output['pdf_unit'] = $this->pdfUnit;
        }
        if (isset($this->_usedProperties['pdfMarginHeader'])) {
            $output['pdf_margin_header'] = $this->pdfMarginHeader;
        }
        if (isset($this->_usedProperties['pdfMarginFooter'])) {
            $output['pdf_margin_footer'] = $this->pdfMarginFooter;
        }
        if (isset($this->_usedProperties['pdfMarginTop'])) {
            $output['pdf_margin_top'] = $this->pdfMarginTop;
        }
        if (isset($this->_usedProperties['pdfMarginBottom'])) {
            $output['pdf_margin_bottom'] = $this->pdfMarginBottom;
        }
        if (isset($this->_usedProperties['pdfMarginLeft'])) {
            $output['pdf_margin_left'] = $this->pdfMarginLeft;
        }
        if (isset($this->_usedProperties['pdfMarginRight'])) {
            $output['pdf_margin_right'] = $this->pdfMarginRight;
        }
        if (isset($this->_usedProperties['pdfFontNameMain'])) {
            $output['pdf_font_name_main'] = $this->pdfFontNameMain;
        }
        if (isset($this->_usedProperties['pdfFontSizeMain'])) {
            $output['pdf_font_size_main'] = $this->pdfFontSizeMain;
        }
        if (isset($this->_usedProperties['pdfFontNameData'])) {
            $output['pdf_font_name_data'] = $this->pdfFontNameData;
        }
        if (isset($this->_usedProperties['pdfFontSizeData'])) {
            $output['pdf_font_size_data'] = $this->pdfFontSizeData;
        }
        if (isset($this->_usedProperties['pdfFontMonospaced'])) {
            $output['pdf_font_monospaced'] = $this->pdfFontMonospaced;
        }
        if (isset($this->_usedProperties['pdfImageScaleRatio'])) {
            $output['pdf_image_scale_ratio'] = $this->pdfImageScaleRatio;
        }

        return $output;
    }

}
