<?php

namespace App\Http\Controllers\Admin\AboutCompany;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\AboutCompany\Hotline;

class HotlineController extends ControllerExtendedInput
{
    private const PATH = 'admin_panel.pages.about_company.hotline';
    public $model = Hotline::class;
    public $nameInBlade = "hotline";
    public $pathToBlade = self::PATH;
    public $pathStoreImages = "images_store/hotline";


}
