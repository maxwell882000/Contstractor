<?php

namespace App\Http\Controllers\Admin\AboutCompany;


use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Models\AboutCompany\AboutCompanyDescription;
use App\Models\AboutCompany\AboutCompanyTitle;


class DescCompanyController extends ControllerExtendedListInputWithTitle
{
    private const PATH = "admin_panel.pages.about_company.desc_company.";
    public $nameUrlParent = "admin.about_us.";
    public $model = AboutCompanyDescription::class;
    public $foreign_key = "about_company_title_id";
    public $is_morph = false;
    public $pathStoreImages = "images_store";
    public $modelParent = AboutCompanyTitle::class;
    public $nameInBlade = "company_about";
    public $pathToBlade = self::PATH . "company_about_input";
    public $nameInBladeList = "company_about_list";
    public $pathToBladeInList = self::PATH . "company_about_show";



}
