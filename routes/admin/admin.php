<?php


use App\Helper\RouteBuilderList;
use Illuminate\Support\Facades\Route;

$main = new RouteBuilderList(\App\Http\Controllers\Admin\AdminController::class, "main");
Route::prefix("admin_panel")->name("admin.")->group(function () use ($main) {
    $main->input();
});

Route::middleware("auth")->prefix("admin_panel")->name("admin.")->group(function () use ($main) {

    $main->show();
    $main->delete();
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, "modelShowList"])->name("index");
    include __DIR__ . '/home.php';
    include __DIR__ . '/about_us.php';
    include __DIR__ . '/common.php';
    include __DIR__ . '/contact_us.php';
    include __DIR__ . '/gallery.php';
    include __DIR__ . '/shop_gallery.php';
    include __DIR__ . '/footer.php';
});

