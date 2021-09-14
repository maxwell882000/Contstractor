<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StylesController extends Controller
{
    public function stylesShow(){
        return view("admin_panel.pages.common.styles");
    }

    public function stylesInput(){
        return redirect()->back();
    }
}
