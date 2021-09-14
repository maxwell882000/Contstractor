<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DescBeforeCardController extends Controller
{
    public function descBeforeCardShow()
    {
        return view("admin_panel.pages.home.desc_before_card");
    }

    public function descBeforeCardInput()
    {
        return redirect()->back();
    }
}
