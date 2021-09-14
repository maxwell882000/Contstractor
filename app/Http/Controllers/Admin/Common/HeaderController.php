<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function headerShow(){
        return view("admin_panel.pages.common.header");
    }
    public function headerInput(){
        return redirect()->back();
    }
}
