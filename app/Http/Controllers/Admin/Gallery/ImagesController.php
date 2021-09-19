<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\ExtenededController\ControllerBaseImageCategory;
use App\Models\Tags\ImageToCategory;

class ImagesController extends ControllerBaseImageCategory
{
    public $nameUrlParent = "admin.gallery.";
    public $pathToBlade = self::PATH . "images_input";
    public $offValidation = true;
    public $model = ImageToCategory::class;
}
