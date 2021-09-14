<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    private const PATH = "admin_panel.pages.gallery.images.";
    public function imagesShowList(){
        return view(self::PATH . "images_show");
    }
    public function imagesShow(){
        return view(self::PATH .  "images_input");
    }

    public function  imagesInput(){
        return redirect()->back();
    }
}
