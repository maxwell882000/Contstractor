<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    public function phoneNumberShow()
    {
        return view("admin_panel.pages.contact_us.phone_number");
    }
}
