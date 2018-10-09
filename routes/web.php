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
Route::get('/home',"MainController@view");

Route::get('/main2', 'MainController@database');

Route::get('/login',"SessionController@view");
Route::post('/login', "SessionController@login")->name('login');
Route::get('/logout', "SessionController@destroy");

Route::prefix('setup')->group(function () {
    Route::get('dashboard', "Setup\DashboardController@view");

    Route::get('users', "Setup\UsersController@view");
    Route::post('users', "Setup\UsersController@form");

    Route::get('carousel', "Setup\CarouselController@view");
    Route::post('carousel', "Setup\CarouselController@form");

    Route::get('mainpage', "Setup\MainpageController@view");
    Route::post('mainpage', "Setup\MainpageController@form");

    Route::get('module', "Setup\ModuleController@view");
    Route::post('module', "Setup\ModuleController@form");

    Route::get('activity', "Setup\ActivityController@view");
    Route::post('activity', "Setup\ActivityController@form");
});

//change carousel image to small thumbnail size
Route::get('/thumbnail/{folder}/{image_path}', function($folder,$image_path){
    $img = Image::make('uploads/'.$folder.'/'.$image_path)->resize(96, 96);

	return $img->response();
});
