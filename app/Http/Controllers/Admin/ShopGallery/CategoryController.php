<?php

namespace App\Http\Controllers\Admin\ShopGallery;

use App\Http\Controllers\ExtenededController\ControllerBaseCategory;
use App\Models\Shop\CategoryShop;

class CategoryController extends ControllerBaseCategory
{
    public $model = CategoryShop::class;
    public $nameUrlParent = "admin.shop_gallery.";
}
