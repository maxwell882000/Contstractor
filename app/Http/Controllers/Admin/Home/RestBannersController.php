<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestBannersController extends Controller
{
    private const PATH = "admin_panel.pages.home.rest_banners.";

    function bannerShowList()
    {
        return view(self::PATH . "banners_show");
    }

    function bannerShow()
    {
        return view(self::PATH . "banner_input");
    }

    function bannerInput()
    {
        return redirect()->back();
    }
}
