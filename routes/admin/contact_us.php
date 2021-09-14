<?php


use  \App\Http\Controllers\Admin\ContactUs;
use Illuminate\Support\Facades\Route;
Route::prefix("/contact_us")->name("contact_us.")->group(function () {
    Route::get("/addressShow", [ContactUs\AddressController::class, "addressShow"])
        ->name("address_show");

    Route::get("/emailShow", [ContactUs\EmailController::class, "emailShow"])
        ->name("email_show");

    Route::get("/phoneNumberShow", [ContactUs\PhoneNumberController::class, "phoneNumberShow"])
        ->name("phone_number_show");

    Route::post("/informationInput", [ContactUs\InformationController::class, "informationInput"])
        ->name("information_input");

    Route::get("/formSendTextShow", [ContactUs\FormSendTextController::class, "formSendTextShow"])
        ->name("form_send_text_show");

    Route::post("/formSendTextInput", [ContactUs\FormSendTextController::class, "formSendTextInput"])
        ->name("form_send_text_input");

});
