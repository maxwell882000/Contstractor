<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\ExtenededController\ControllerBaseCategory;
use App\Models\Gallery\CategoryGallery;

class CategoryController extends ControllerBaseCategory
{
    public $model = CategoryGallery::class;
    public $nameUrlParent = "admin.gallery.";
}
