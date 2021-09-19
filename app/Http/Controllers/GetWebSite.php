<?php

namespace App\Http\Controllers;

use App\Http\CustomController\ControllerWithSpecialView;
use App\Models\Tags\ImageToCategory;
use App\Models\Tags\ProductToCategory;
use Illuminate\Http\Request;

class GetWebSite extends ControllerWithSpecialView
{
    public function index()
    {

        return $this->viewColor("index");
    }

    public function shop()
    {
        $images = ProductToCategory::paginate(15);
        return $this->viewColor("shop", ["product" => $images]);
    }

    public function aboutUs()
    {
        return $this->viewColor("about-us");
    }

    public function gallery()
    {
        $images = ImageToCategory::paginate(15);

        return $this->viewColor("gallery", ["image" => $images]);
    }

    public function contactUs()
    {
        return $this->viewColor("contact");
    }

    public function receiveMessage(Request $request)
    {

        return redirect()->back();
    }
}
