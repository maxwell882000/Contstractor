<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Common\CommonForAll;
use App\Models\Common\Logo;

class CommonAllController extends ControllerExtendedInput
{
    private const  PATH = "admin_panel.pages.common.";
    public $model = CommonForAll::class;
    public $pathStoreImages = "images_store/common";
    public $nameInBlade = "common";
    public $pathToBlade = self::PATH . "common";
}
