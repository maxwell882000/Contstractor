<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Http\Controllers\ExtenededController\ControllerExtendedListInput;
use App\Models\Common\Buttons;
use App\Models\Common\Images;
use App\Models\Home\HomeBanner;
use App\Models\Home\InfoSectionModel;
use App\Models\Home\MainBanner;
use App\TraitDirectory\CreateAndUpdateButton;
use App\TraitDirectory\CreateAndUpdateImage;
use App\TraitDirectory\CreateImageAndButton;
use Illuminate\Http\Request;

class MainBannerController extends ControllerExtendedInput
{
    private const PATH = "admin_panel.pages.home.main_banner";
    public $model = MainBanner::class;
    public $nameInBlade = "banner";
    public $pathToBlade = self::PATH;
    public $pathStoreImages = "images_store/main_banner";


}
