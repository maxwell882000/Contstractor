<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeHomeController extends Controller
{
    public function welcomeHomeShow()
    {
        return view("admin_panel.pages.home.welcome_home");
    }

    public function welcomeHomeInput()
    {
        return redirect()->back();
    }
}
