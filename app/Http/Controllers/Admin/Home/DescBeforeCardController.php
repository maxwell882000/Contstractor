<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Home\SectionNearMap;

class DescBeforeCardController extends ControllerExtendedInput
{
    private const PATH = "admin_panel.pages.home.desc_before_card";
    public $model = SectionNearMap::class;
    public $nameInBlade = "near_map";
    public $pathToBlade = self::PATH;
    public $pathStoreImages = "images_store/near_map";

}
