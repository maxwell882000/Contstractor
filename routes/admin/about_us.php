<?php

use App\Helper\RouteBuilderList;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AboutCompany;
use \App\Helper\RouteBuilder;

Route::prefix("/about_us")->name("about_us.")->group(function () {
    $company = new RouteBuilderList(AboutCompany\DescCompanyController::class, "company_about");
    $personal = new RouteBuilderList(AboutCompany\PersonsController::class, "persons");
    $banner = new RouteBuilder(AboutCompany\BeginBannerController::class, "begin_banner");
    $hotline = new RouteBuilder(AboutCompany\HotlineController::class, "hotline");

    $banner->show();
    $banner->input();


    $company->showList();

    $company->titleInput();

    $company->newShow();

    $company->newCreate();

    $company->show();

    $company->input();

    $company->delete();


    $personal->showList();

    $personal->titleInput();

    $personal->newShow();

    $personal->newCreate();

    $personal->show();

    $personal->input();

    $personal->delete();


    $hotline->show();
    $hotline->input();

});
