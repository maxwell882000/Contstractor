<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Common;
    Route::prefix("/common")->name("common.")->group(function () {
    Route::get("/footerShow", [Common\FooterController::class, "footerShow"])
        ->name("footer_show");

    Route::post("/footerInput", [Common\FooterController::class, "footerInput"])
        ->name("footer_input");

    Route::get("/headerShow", [Common\HeaderController::class, "headerShow"])
        ->name("header_show");

    Route::post("/headerInput", [Common\HeaderController::class, "headerInput"])
        ->name("header_input");

    Route::get("/logoShow", [Common\LogoController::class, "logoShow"])
        ->name("logo_show");

    Route::post("/logoInput", [Common\LogoController::class, "logoInput"])
        ->name("logo_input");

    Route::get("/mapShow", [Common\MapController::class, "mapShow"])
        ->name("map_show");

    Route::post("/mapInput", [Common\MapController::class, "mapInput"])
        ->name("map_input");

    Route::get("/sponsorShowList", [Common\SponsorController::class, "sponsorShowList"])
        ->name("sponsor_show_list");

    Route::get("/sponsorShow", [Common\SponsorController::class, "sponsorShow"])
        ->name("sponsor_show");

    Route::post("/sponsorInput", [Common\SponsorController::class, "sponsorInput"])
        ->name("sponsor_input");

    Route::get("/stylesShow", [Common\StylesController::class, "stylesShow"])
        ->name("styles_show");

    Route::post("/stylesInput", [Common\StylesController::class, "stylesInput"])
        ->name("styles_input");
});
