<?php

namespace App\Http\Controllers\Admin\AboutCompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotlineController extends Controller
{
    public function hotlineShow()
    {
        return view('admin_panel.pages.about_company.hotline');
    }

    public function hotlineInput()
    {
        return redirect()->back();
    }
}
