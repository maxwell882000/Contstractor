<?php

namespace App\Http\Controllers\Admin\ShopGallery;

use App\Http\Controllers\ExtenededController\ControllerBaseImageCategory;
use App\Models\Tags\ProductToCategory;

class ProductController extends ControllerBaseImageCategory
{
    public $nameUrlParent = "admin.shop_gallery.";
    public $pathToBlade =  self::PATH . "images_shop_input";

    public $model = ProductToCategory::class;
}
