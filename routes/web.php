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

Route::get('/', "MainController@view")->name('home');

Route::get('/main2', 'MainController@database');

Route::get('/home',"MainController@view");

Route::get('/login',"SessionController@view");
Route::post('/login', "SessionController@login")->name('login');
Route::get('/logout', "SessionController@destroy");

Route::prefix('setup')->group(function () {
    Route::get('carousel', "Setup\CarouselController@view");
    Route::post('carousel', "Setup\CarouselController@form");
});

//change carousel image to small thumbnail size
Route::get('/thumbnail/carousel/{image_path}', function($image_path){
    $img = Image::make('uploads/carousel/'.$image_path)->resize(96, 96);

	return $img->response();
});
