<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    // types :
    // address - 0
    // email   - 1
    // phone number - 2
    public function informationInput()
    {
        return redirect()->back();
    }
}
