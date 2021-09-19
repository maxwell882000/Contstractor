<?php

namespace App\Http\Controllers\Admin\Common\Footer;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Common\Footer\LeftMostText;

class LeftMostTextController extends ControllerExtendedInput
{
    private const  PATH = "admin_panel.pages.common.footer.";
    public $model = LeftMostText::class;
    public $nameInBlade = "text";
    public $pathToBlade = self::PATH . "left_most_text";
}
