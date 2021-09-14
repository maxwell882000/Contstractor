<?php

use Illuminate\Support\Facades\Route;
use  \App\Http\Controllers\Admin\AboutCompany;

Route::prefix("/about_us")->name("about_us.")->group(function () {
    Route::get("/beginBannerShow", [AboutCompany\BeginBannerController::class, "beginBannerShow"])
        ->name("begin_banner_show");

    Route::post("/beginBannerInput", [AboutCompany\BeginBannerController::class, "beginBannerInput"])
        ->name("begin_banner_input");

    Route::get("/companyAboutTitleShow", [AboutCompany\DescCompanyController::class, "companyAboutTitleShow"])
        ->name("company_about_title_show");

    Route::post("/companyAboutTitleInput", [AboutCompany\DescCompanyController::class, "companyAboutTitleInput"])
        ->name("company_about_title_input");

    Route::get("/companyAboutShowList", [AboutCompany\DescCompanyController::class, "companyAboutShowList"])
        ->name("company_about_show_list");

    Route::get("/companyAboutShow", [AboutCompany\DescCompanyController::class, "companyAboutShow"])
        ->name("company_about_show");

    Route::post("/companyAboutInput", [AboutCompany\DescCompanyController::class, "companyAboutInput"])
        ->name("companyAboutInput");

    Route::get("/hotlineShow", [AboutCompany\HotlineController::class, "hotlineShow"])
        ->name("hotline_show");

    Route::post("/hotlineInput", [AboutCompany\HotlineController::class, "hotlineInput"])
        ->name("hotline_input");

    Route::get("/personsShowList", [AboutCompany\PersonsController::class, "personsShowList"])
        ->name("persons_show_list");

    Route::post("/personsTitleInput", [AboutCompany\PersonsController::class, "personsTitleInput"])
        ->name("persons_title_input");


    Route::get("/personsShow", [AboutCompany\PersonsController::class, "personsShow"])
        ->name("persons_show");

    Route::post("/personsInput", [AboutCompany\PersonsController::class, "personsInput"])
        ->name("persons_input");

});
