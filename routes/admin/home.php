<?php

use App\Helper\RouteBuilder;
use App\Helper\RouteBuilderList;
use \App\Http\Controllers\Admin\Home;
use Illuminate\Support\Facades\Route;

Route::prefix("/home")->name("home.")->group(function () {
    $comment = new RouteBuilderList(Home\CommentsController::class, "comments");
    $comment->input();
    $comment->show();
    $comment->newShow();
    $comment->newCreate();
    $comment->showList();
    $comment->delete();

    $desc = new RouteBuilder(Home\DescBeforeCardController::class, "desc_before_card");
    $desc->show();
    $desc->input();

    $main_banner = new RouteBuilder(Home\MainBannerController::class, "main_banner");
    $main_banner->input();
    $main_banner->show();

    $banner = new RouteBuilderList(Home\RestBannersController::class, "banner");
    $banner->input();
    $banner->show();
    $banner->newShow();
    $banner->newCreate();
    $banner->showList();
    $banner->delete();

    $welcome = new RouteBuilderList(Home\WelcomeHomeController::class, "welcome_home");
    $welcome->showList();
    $welcome->titleInput();
    $welcome->show();
    $welcome->input();
    $welcome->delete();
    $welcome->newShow();
    $welcome->newCreate();

});
