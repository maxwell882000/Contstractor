<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Common\GoogleMapConf;

class MapController extends ControllerExtendedInput
{
    private const  PATH = "admin_panel.pages.common.";
    public $model = GoogleMapConf::class;
    public $nameInBlade = "map";
    public $pathToBlade = self::PATH . "map";

}
