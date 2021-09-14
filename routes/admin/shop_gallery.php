<?php

use  \App\Http\Controllers\Admin\ShopGallery;
use Illuminate\Support\Facades\Route;

Route::prefix("/shop_gallery")->name("shop_gallery.")->group(function () {

    Route::get("/categoryShowList", [ShopGallery\CategoryController::class, "categoryShowList"])
        ->name("category_show_list");

    Route::get("/categoryShow", [ShopGallery\CategoryController::class, "categoryShow"])
        ->name("category_show");

    Route::post("/categoryInput", [ShopGallery\CategoryController::class, "categoryInput"])
        ->name("category_input");

    Route::get("/productsShowList", [ShopGallery\ProductController::class, "productsShowList"])
        ->name("products_show_list");

    Route::get("/productsShow", [ShopGallery\ProductController::class, "productsShow"])
        ->name("products_show");

    Route::post("/productInput", [ShopGallery\ProductController::class, "productInput"])
        ->name("product_input");
});
