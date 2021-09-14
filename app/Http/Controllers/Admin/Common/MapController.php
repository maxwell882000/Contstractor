<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapController extends Controller
{
    function mapShow(){
        return view("admin_panel.pages.common.map");
    }
    function mapInput(){
        return redirect()->back();
    }
}
