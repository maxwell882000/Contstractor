<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\GetWebSite::class,'index']);
Route::get('/shop', [\App\Http\Controllers\GetWebSite::class,'shop']);
Route::get('/about-us', [\App\Http\Controllers\GetWebSite::class,'aboutUs']);
Route::get('/gallery', [\App\Http\Controllers\GetWebSite::class,'gallery']);
Route::get('/contact-us', [\App\Http\Controllers\GetWebSite::class,'contactUs']);
Route::post('/contact-us', [\App\Http\Controllers\GetWebSite::class,'receiveMessage']);
