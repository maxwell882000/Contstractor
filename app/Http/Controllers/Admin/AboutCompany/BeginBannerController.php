<?php

namespace App\Http\Controllers\Admin\AboutCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeginBannerController extends Controller
{
    public function beginBannerShow()
    {
        return view("admin_panel.pages.about_company.begin_banner");
    }

    public function beginBannerInput(Request $request)
    {
        return redirect()->back();
    }
}
