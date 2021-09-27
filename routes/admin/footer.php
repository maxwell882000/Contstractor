<?php


use App\Helper\RouteBuilder;
use App\Helper\RouteBuilderList;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Common\Footer;

Route::prefix("/footer")->name("footer.")->group(function () {

    $featured_links = new RouteBuilderList(Footer\FeaturedLinksController::class, "featured_links");

    $featured_links->show();

    $featured_links->input();

    $featured_links->showList();

    $featured_links->titleInput();

    $featured_links->delete();

    $featured_links->newCreate();

    $featured_links->newShow();

    $follow_show = new RouteBuilderList(Footer\FollowUsController::class, "follow");
    $follow_show->show();

    $follow_show->input();

    $follow_show->showList();

    $follow_show->titleInput();

    $follow_show->delete();

    $follow_show->newCreate();

    $follow_show->newShow();


    $instagram = new RouteBuilderList(Footer\InstagramFeedController::class, "instagram_feed");
    $instagram->show();

    $instagram->input();

    $instagram->showList();

    $instagram->titleInput();

    $instagram->delete();

    $instagram->newCreate();

    $instagram->newShow();

    $keep_in_touch = new RouteBuilder(Footer\KeepInTouchController::class, "keep_in_touch");
    $keep_in_touch->input();
    $keep_in_touch->show();

    $left_most_text = new RouteBuilder(Footer\LeftMostTextController::class, "left_most_text");
    $left_most_text->show();
    $left_most_text->input();

});
