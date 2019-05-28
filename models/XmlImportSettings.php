<?php namespace Lovata\Shopaholic\Models;

use Lovata\Toolbox\Models\CommonSettings;

use Lovata\Shopaholic\Classes\Import\ImportBrandModelFromXML;
use Lovata\Shopaholic\Classes\Import\ImportCategoryModelFromXML;
use Lovata\Shopaholic\Classes\Import\ImportOfferModelFromXML;
use Lovata\Shopaholic\Classes\Import\ImportOfferPriceFromXML;
use Lovata\Shopaholic\Classes\Import\ImportProductModelFromXML;

/**
 * Class XmlImportSettings
 * @package Lovata\Shopaholic\Models
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @mixin \October\Rain\Database\Builder
 * @mixin \Eloquent
 * @mixin \System\Behaviors\SettingsModel
 */
class XmlImportSettings extends CommonSettings
{
    const SETTINGS_CODE = 'lovata_shopaholic_xml_import_settings';

    public $settingsCode = 'lovata_shopaholic_xml_import_settings';

    /**
     * Get import file list
     * @return array
     */
    public function getFileList()
    {
        $arFileList = (array) $this->get('file_list');
        $arFileList = array_pluck($arFileList, 'path');

        return $arFileList;
    }

    /**
     * Get product field list
     * @return array
     */
    public function getProductFields()
    {
        $arFileList = ImportProductModelFromXML::getFields();

        return $arFileList;
    }

    /**
     * Get offer field list
     * @return array
     */
    public function getOfferFields()
    {
        $arFileList = ImportOfferModelFromXML::getFields();

        return $arFileList;
    }

    /**
     * Get offer price field list
     * @return array
     */
    public function getPriceFields()
    {
        $arFileList = ImportOfferPriceFromXML::getFields();

        return $arFileList;
    }

    /**
     * Get brand field list
     * @return array
     */
    public function getBrandFields()
    {
        $arFileList = ImportBrandModelFromXML::getFields();

        return $arFileList;
    }

    /**
     * Get category field list
     * @return array
     */
    public function getCategoryFields()
    {
        $arFileList = ImportCategoryModelFromXML::getFields();

        return $arFileList;
    }
}
