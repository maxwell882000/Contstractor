<?php


use App\Helper\RouteBuilder;
use  \App\Http\Controllers\Admin\ContactUs;
use Illuminate\Support\Facades\Route;

Route::prefix("/contact_us")->name("contact_us.")->group(function () {

    $begin_banner = new \App\Helper\RouteBuilder(ContactUs\BeginBannerController::class, "begin_banner");
    $begin_banner->show();
    $begin_banner->input();


    $address = new RouteBuilder(ContactUs\AddressController::class, "address");
    $address->show();
    $address->input();

    $email = new RouteBuilder(ContactUs\EmailController::class, "email");
    $email->show();
    $email->input();

    $phone_number = new RouteBuilder(ContactUs\PhoneNumberController::class, "phone_number");
    $phone_number->show();
    $phone_number->input();


    $form = new RouteBuilder(ContactUs\FormSendTextController::class, "form_send_text");
    $form->show();
    $form->input();
});
