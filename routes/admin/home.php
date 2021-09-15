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

    Route::get("/mainBannerShow", [Home\MainBannerController::class, "modelShow"])
        ->name("main_banner_show");

    Route::post("/mainBannerShow", [Home\MainBannerController::class, "modelInput"])
        ->name("main_banner_input");

    Route::get("/bannerShowList", [Home\RestBannersController::class, "modelShowList"])
        ->name("banner_show_list");

    Route::get("/bannerShow/{id}", [Home\RestBannersController::class, "modelShowExisting"])
        ->name("banner_show");
    Route::get("/bannerDelete/{id}", [Home\RestBannersController::class, "modelDelete"])
        ->name("banner_delete");

    Route::post("/bannerShow", [Home\RestBannersController::class, "modelInput"])
        ->name("banner_input");


    Route::get("/welcomeHomeShow", [Home\WelcomeHomeController::class, "modelShowList"])
        ->name("welcome_home_show_list");

    Route::post("/welcomeHomeShow/title", [Home\WelcomeHomeController::class, "modelObjectInput"])
        ->name("welcome_home_title_input");

    Route::get("/welcomeHomeShow/{id}", [Home\WelcomeHomeController::class, "modelShowExisting"])
        ->name("welcome_home_show");

    Route::post("/welcomeHomeShow/{id}", [Home\WelcomeHomeController::class, "modelInput"])
        ->name("welcome_home_input");

    Route::get("/welcomeHomeDelete/{id}", [Home\WelcomeHomeController::class, "modelDelete"])
        ->name("welcome_delete");

});
