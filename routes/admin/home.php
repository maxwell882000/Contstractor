<?php

use \App\Http\Controllers\Admin\Home;
use Illuminate\Support\Facades\Route;

Route::prefix("/home")->name("home.")->group(function () {
    Route::get("/commentList", [Home\CommentsController::class, "commentsShowList"])
        ->name("comments_list");

    Route::get("/commentShow", [Home\CommentsController::class, "commentsShow"])
        ->name("comments_show");

    Route::post("/commentList", [Home\CommentsController::class, "commentsInput"])
        ->name("comments_input");

    Route::get("/descBeforeCardShow", [Home\DescBeforeCardController::class, "descBeforeCardShow"])
        ->name("desc_before_card_show");

    Route::post("/descBeforeCardInput", [Home\DescBeforeCardController::class, "descBeforeCardShow"])
        ->name("desc_before_card_input");

    Route::get("/mainBannerShow", [Home\MainBannerController::class, "mainBannerShow"])
        ->name("main_banner_show");

    Route::post("/mainBannerShow", [Home\MainBannerController::class, "mainBannerInput"])
        ->name("main_banner_input");

    Route::get("/bannerShowList", [Home\RestBannersController::class, "bannerShowList"])
        ->name("banner_show_list");

    Route::get("/bannerShow", [Home\RestBannersController::class, "bannerShow"])
        ->name("banner_show");

    Route::post("/bannerShow", [Home\RestBannersController::class, "bannerInput"])
        ->name("banner_input");


    Route::get("/welcomeHomeShow", [Home\WelcomeHomeController::class, "welcomeHomeShow"])
        ->name("welcome_home_show");


    Route::post("/welcomeHomeShow", [Home\WelcomeHomeController::class, "welcomeHomeInput"])
        ->name("welcome_home_input");

});
