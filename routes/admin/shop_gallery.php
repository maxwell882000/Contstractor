<?php

use App\Helper\RouteBuilderList;
use  \App\Http\Controllers\Admin\ShopGallery;
use Illuminate\Support\Facades\Route;

Route::prefix("/shop_gallery")->name("shop_gallery.")->group(function () {


    $begin_banner = new \App\Helper\RouteBuilder(ShopGallery\BeginBannerController::class, "begin_banner");
    $begin_banner->show();
    $begin_banner->input();


    $category = new RouteBuilderList(ShopGallery\CategoryController::class, "category");
    $category->showList();
    $category->show();
    $category->input();
    $category->delete();

    $images = new RouteBuilderList(ShopGallery\ProductController::class, "images");
    $images->showList();
    $images->show();
    $images->newCreate();
    $images->newShow();
    $images->input();
    $images->delete();

});
