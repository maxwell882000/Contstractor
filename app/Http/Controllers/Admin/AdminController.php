<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExtenededController\ControllerExtendedListInput;
use App\Models\ContactUs\FormToFill;


class AdminController extends ControllerExtendedListInput
{
    private const  PATH = "admin_panel.pages.main.";
    public $model = FormToFill::class;
    public $nameInBlade = "main";
    public $nameUrlParent = "admin.";
    public $pathToBlade = self::PATH . "main_input";
    public $nameInBladeList = "main";
    public $pathStoreImages = "images_store/comments";
    public $pathToBladeInList = self::PATH . "main_show";

}
