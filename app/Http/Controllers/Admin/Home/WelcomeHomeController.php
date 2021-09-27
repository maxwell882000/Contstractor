<?php

namespace App\Http\Controllers\Admin\Home;


use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Http\RequestCustom;
use App\Models\Common\Buttons;
use App\Models\Home\InfoSectionDescriptionModel;
use App\Models\Home\InfoSectionModel;


class WelcomeHomeController extends ControllerExtendedListInputWithTitle
{
    private const PATH = "admin_panel.pages.home.welcome_home.";
    public $model = InfoSectionDescriptionModel::class;
    public $nameInBlade = "welcome_home";
    public $nameUrlParent = "admin.home.";
    public $pathToBlade = self::PATH . "welcome_home_input";
    public $nameInBladeList = "object_list";
    public $pathStoreImages = "images_store/welcome";
    public $pathToBladeInList = self::PATH . "welcome_home_show";
    public $modelParent = InfoSectionModel::class;



}
