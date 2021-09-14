<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private const PATH = "admin_panel.pages.gallery.category.";

    public function categoryShowList()
    {
        return view(self::PATH . "category_show");
    }

    public function categoryShow()
    {
        return view(self::PATH . "category_input");
    }

    public function categoryInput()
    {
        return redirect()->back();
    }
}
