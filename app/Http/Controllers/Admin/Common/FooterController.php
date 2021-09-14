<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function footerShow(){
        return view("admin_panel.pages.common.footer");
    }
    public function footerInput(){
        return redirect()->back();
    }
}
