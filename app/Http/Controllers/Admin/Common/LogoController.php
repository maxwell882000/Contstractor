<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Common\Logo;

class LogoController extends ControllerExtendedInput
{
    private const  PATH = "admin_panel.pages.common.";
    public $model = Logo::class;
    public $offValidation = true;
    public $pathStoreImages = "images_store/logo";
    public $nameInBlade = "logo";
    public $pathToBlade = self::PATH . "logo";

}
