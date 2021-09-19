<?php

namespace App\Http\Controllers\Admin\Common\Footer;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Common\Footer\KeepInTouch;

class KeepInTouchController extends ControllerExtendedInput
{
    private const  PATH = "admin_panel.pages.common.footer.";
    public $model = KeepInTouch::class;
    public $nameInBlade = "keep";
    public $pathToBlade = self::PATH . "keep_in_touch";
}
