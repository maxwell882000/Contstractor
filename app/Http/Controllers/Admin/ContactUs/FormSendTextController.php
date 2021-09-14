<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormSendTextController extends Controller
{
    public function formSendTextShow()
    {
        return view("admin_panel.pages.contact_us.form_send_text");
    }

    public function formSendTextInput()
    {
        return redirect()->back();
    }
}
