<?php

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

Route::get('/', function () {
    return view('main.main');
});

Route::prefix('setup')->group(function () {
    Route::get('carousel', "Setup\SetupCarousel@show");
    Route::get('carousel_save', "Setup\SetupCarousel@form");
});
