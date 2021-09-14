<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function addressShow()
    {
        return view("admin_panel.pages.contact_us.address");
    }

}
