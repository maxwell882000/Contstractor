<?php


use Illuminate\Support\Facades\Route;

Route::middleware("auth")->prefix("admin_panel")->name("admin.")->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, "index"])->name("index");
    include __DIR__ . '/home.php';
    include __DIR__ . '/about_us.php';
    include __DIR__ . '/common.php';
    include __DIR__ . '/contact_us.php';
    include __DIR__ . '/gallery.php';
    include __DIR__ . '/shop_gallery.php';
});

