<?php


use App\Helper\RouteBuilderList;
use  \App\Http\Controllers\Admin\Gallery;
use Illuminate\Support\Facades\Route;

Route::prefix("/gallery")->name("gallery.")->group(function () {

    $begin_banner = new \App\Helper\RouteBuilder(Gallery\BeginBannerController::class, "begin_banner");
    $begin_banner->show();
    $begin_banner->input();

    $category = new RouteBuilderList(Gallery\CategoryController::class, "category");
    $category->showList();
    $category->show();
    $category->input();
    $category->delete();
    $images = new RouteBuilderList(Gallery\ImagesController::class, "images");
    $images->showList();
    $images->show();
    $images->input();
    $images->newCreate();
    $images->newShow();
    $images->delete();

});
