<?php


use  \App\Http\Controllers\Admin\Gallery;
use Illuminate\Support\Facades\Route;

Route::prefix("/gallery")->name("gallery.")->group(function () {


    Route::get("/categoryShowList", [Gallery\CategoryController::class, "categoryShowList"])
        ->name("category_show_list");

    Route::get("/categoryShow", [Gallery\CategoryController::class, "categoryShow"])
        ->name("category_show");

    Route::post("/categoryInput", [Gallery\CategoryController::class, "categoryInput"])
        ->name("category_input");

    Route::get("/imagesShowList", [Gallery\ImagesController::class, "imagesShowList"])
        ->name("images_show_list");

    Route::get("/imagesShow", [Gallery\ImagesController::class, "imagesShow"])
        ->name("images_show");

    Route::post("/imagesInput", [Gallery\ImagesController::class, "imagesInput"])
        ->name("images_input");


});
