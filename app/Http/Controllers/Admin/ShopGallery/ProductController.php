<?php

namespace App\Http\Controllers\Admin\ShopGallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private const PATH = "admin_panel.pages.shop_gallery.product.";
    public function productsShowList(){
        return view(self::PATH . "product_show");
    }
    public function productsShow(){
        return view(self::PATH .  "product_input");
    }

    public function  productInput(){
        return redirect()->back();
    }
}
