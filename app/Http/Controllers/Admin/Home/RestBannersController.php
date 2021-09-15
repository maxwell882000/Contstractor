<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExtenededController\ControllerExtendedListInput;
use App\Models\Home\HomeBanner;
use App\Models\Home\MainBanner;
use Illuminate\Http\Request;

class RestBannersController extends ControllerExtendedListInput
{
    private const PATH = "admin_panel.pages.home.rest_banners.";
    public $model = HomeBanner::class;
    public $nameInBlade = "banner";
    public $pathToBlade = self::PATH . "banner_input";
    public $nameInBladeList = "banner_list";
    public $pathStoreImages = "images_store/rest_banner";
    public $pathToBladeInList = self::PATH . "banners_show";

}
