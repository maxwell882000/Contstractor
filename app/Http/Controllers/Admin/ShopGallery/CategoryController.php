<?php

namespace App\Http\Controllers\Admin\ShopGallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private const PATH = "admin_panel.pages.show_gallery.category.";

    public function categoryShowList()
    {
        return view(self::PATH . "category_shop_show");
    }

    public function categoryShow()
    {
        return view(self::PATH . "category_shop_input");
    }

    public function categoryInput()
    {
        return redirect()->back();
    }
}
