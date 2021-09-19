<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Common\Footer;

Route::prefix("/footer")->name("footer.")->group(function () {

    // shows all page
    Route::get("/featuredLinkShowList", [Footer\FeaturedLinksController::class, "modelShowList"])
        ->name("featured_links_show_list");
    // inputs title
    Route::post("/featuredLinkShowList", [Footer\FeaturedLinksController::class, "modelTitleInput"])
        ->name("featured_links_show_list_input");


    // shows page for inputing new item to the list
    Route::get("/featuredLinkCreate/{parent_id}", [Footer\FeaturedLinksController::class, "modelNewView"])
        ->name("featured_links_new_show");

    // create new items
    Route::post("/featuredLinkCreate/{parent_id}", [Footer\FeaturedLinksController::class, "modelNew"])
        ->name("featured_links_create");

    // show created item
    Route::get("/featuredLinkShow/{id}", [Footer\FeaturedLinksController::class, "modelShowExisting"])
        ->name("featured_links_show");
    // updates item
    Route::post("/featuredLinkShow/{id}", [Footer\FeaturedLinksController::class, "modelInput"])
        ->name("featured_links_input");
    // deletes item
    Route::get("/featuredLinkDelete/{id}", [Footer\FeaturedLinksController::class, "modelDelete"])
        ->name("featured_links_delete");

    // ================================
    Route::get("/followUsShowList", [Footer\FollowUsController::class, "modelShowList"])
        ->name("follow_show_list");

    Route::post("/followUsShowList", [Footer\FollowUsController::class, "modelTitleInput"])
        ->name("follow_show_list_input");


    // shows page for inputing new item to the list
    Route::get("/followUSCreate/{parent_id}", [Footer\FollowUsController::class, "modelNewView"])
        ->name("follow_new_show");

    // create new items
    Route::post("/followUSCreate/{parent_id}", [Footer\FollowUsController::class, "modelNew"])
        ->name("follow_create");


    Route::get("/followUsShow/{id}", [Footer\FollowUsController::class, "modelShowExisting"])
        ->name("follow_show");

    Route::post("/followUsShow/{id}", [Footer\FollowUsController::class, "modelInput"])
        ->name("follow_input");

    Route::get("/followUsDelete/{id}", [Footer\FollowUsController::class, "modelDelete"])
        ->name("follow_delete");


    Route::get("/instagramFeedShowList", [Footer\InstagramFeedController::class, "modelShowList"])
        ->name("instagram_feed_show_list");

    Route::post("/instagramFeedShowList", [Footer\InstagramFeedController::class, "modelTitleInput"])
        ->name("instagram_feed_show_list_input");

    // shows page for inputing new item to the list
    Route::get("/instagramFeedCreate/{parent_id}", [Footer\InstagramFeedController::class, "modelNewView"])
        ->name("instagram_feed_new_show");

    // create new items
    Route::post("/instagramFeedCreate/{parent_id}", [Footer\InstagramFeedController::class, "modelNew"])
        ->name("instagram_feed_create");


    Route::get("/instagramFeedShow/{id}", [Footer\InstagramFeedController::class, "modelShowExisting"])
        ->name("instagram_feed_show");

    Route::post("/instagramFeedShow/{id}", [Footer\InstagramFeedController::class, "modelInput"])
        ->name("instagram_feed_input");

    Route::get("/instagramFeedDelete/{id}", [Footer\InstagramFeedController::class, "modelDelete"])
        ->name("instagram_feed_delete");


    Route::get("/keepInTouchShow", [Footer\KeepInTouchController::class, "modelShow"])
        ->name("keep_in_touch_show");
    Route::post("/keepInTouchShow", [Footer\KeepInTouchController::class, "modelInput"])
        ->name("keep_in_touch_input");

    Route::get("/leftMostTextShow", [Footer\LeftMostTextController::class, "modelShow"])
        ->name("left_most_text_show");
    Route::post("/leftMostTextShow", [Footer\LeftMostTextController::class, "modelInput"])
        ->name("left_most_text_input");


});
