<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Home\MainBanner;


class MainBannerController extends ControllerExtendedInput
{
    private const PATH = "admin_panel.pages.home.main_banner";
    public $model = MainBanner::class;
    public $nameInBlade = "banner";
    public $pathToBlade = self::PATH;
    public $pathStoreImages = "images_store/main_banner";


}
