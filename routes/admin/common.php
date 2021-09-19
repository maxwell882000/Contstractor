<?php

use App\Helper\RouteBuilder;
use App\Helper\RouteBuilderList;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Common;

Route::prefix("/common")->name("common.")->group(function () {

    $header = new RouteBuilderList(Common\HeaderController::class, "header");
    $header->showList();
    $header->show();
    $header->input();
    $header->delete();

    $logo = new RouteBuilder(Common\LogoController::class, "logo");
    $logo->show();
    $logo->input();

    $map = new RouteBuilder(Common\MapController::class, "map");
    $map->show();
    $map->input();

    $style = new RouteBuilder(Common\StylesController::class, "styles");
    $style->show();
    $style->input();

    $common = new RouteBuilder(Common\CommonAllController::class, "common");
    $common->show();
    $common->input();

    $sponsor = new RouteBuilderList(Common\SponsorController::class, "sponsor");

    $sponsor->showList();

    $sponsor->titleInput();

    $sponsor->newShow();

    $sponsor->newCreate();

    $sponsor->show();

    $sponsor->input();

    $sponsor->delete();


});
