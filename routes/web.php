<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
include __DIR__ . '/admin/admin.php';
include __DIR__ . '/landing_routes.php';

//Route::get('/shop', function () {
//    return view('index');
//});
//Route::get('/', function () {
//    return view('index');
//});
