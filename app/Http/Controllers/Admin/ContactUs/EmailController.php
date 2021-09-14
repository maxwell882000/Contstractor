<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function emailShow()
    {
        return view("admin_panel.pages.contact_us.email");
    }


}
