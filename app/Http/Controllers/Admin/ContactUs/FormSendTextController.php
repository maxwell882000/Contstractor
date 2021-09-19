<?php

namespace App\Http\Controllers\Admin\ContactUs;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\ContactUs\FormTitle;

class FormSendTextController extends ControllerExtendedInput
{
    public $model = FormTitle::class;
    public $nameInBlade = "form_title";
    public $pathToBlade = "admin_panel.pages.contact_us.form_send_text";

}
