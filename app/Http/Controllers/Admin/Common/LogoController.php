<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function logoShow()
    {
        return view("admin_panel.pages.common.logo");
    }

    public function logoInput(){
        return redirect()->back();
    }
}
