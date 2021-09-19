<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\ExtenededController\ControllerExtendedListInput;
use App\Models\Common\Header;

class HeaderController extends ControllerExtendedListInput
{
    private const  PATH = "admin_panel.pages.common.header.";
    public $model = Header::class;
    public $nameInBlade = "header";
    public $offValidation = true;
    public $nameUrlParent = "admin.common.";
    public $pathToBlade = self::PATH . "header_input";
    public $nameInBladeList = "header_list";
    public $pathToBladeInList = self::PATH . "header_show";

}
