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

Route::get('/', 'API\HomeController@index');
//Route::get('/{any}', 'API\HomeController@index')->where('any', '.*');

Route::namespace('API')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'MovieController@index');

        Route::prefix('movie')->group(function () {
            Route::get('/', 'MovieController@index')->name(ADMIN_MOVIE_INDEX);
            Route::get('/mail', 'MovieController@testMail');
            Route::get('/create', 'MovieController@create')->name(ADMIN_MOVIE_CREATE);
            Route::get('/store', 'MovieController@store')->name(ADMIN_MOVIE_STORE);
            Route::get('/edit/{id}', 'MovieController@edit')->name(ADMIN_MOVIE_EDIT);
            Route::post('/update/{id}', 'MovieController@update')->name(ADMIN_MOVIE_UPDATE);
            Route::get('/delete', 'MovieController@delete')->name(ADMIN_MOVIE_DELETE);
        });

        Route::prefix('room')->group(function () {
            Route::get('/', 'RoomController@index')->name(ADMIN_MOVIE_INDEX);
            Route::get('/create', 'RoomController@create')->name(ADMIN_MOVIE_CREATE);
            Route::get('/store', 'RoomController@store')->name(ADMIN_MOVIE_STORE);
            Route::get('/edit/{id}', 'RoomController@edit')->name(ADMIN_MOVIE_EDIT);
            Route::post('/update/{id}', 'RoomController@update')->name(ADMIN_MOVIE_UPDATE);
            Route::get('/delete', 'RoomController@delete')->name(ADMIN_MOVIE_DELETE);
        });

        Route::prefix('showtime')->group(function () {
            Route::get('/', 'ShowTimeController@index')->name(ADMIN_MOVIE_INDEX);
            Route::get('/create', 'ShowTimeController@create')->name(ADMIN_MOVIE_CREATE);
            Route::get('/store', 'ShowTimeController@store')->name(ADMIN_MOVIE_STORE);
            Route::get('/edit/{id}', 'ShowTimeController@edit')->name(ADMIN_MOVIE_EDIT);
            Route::post('/update/{id}', 'ShowTimeController@update')->name(ADMIN_MOVIE_UPDATE);
            Route::get('/delete', 'ShowTimeController@delete')->name(ADMIN_MOVIE_DELETE);
        });
    });
});

//Auth::routes();
Route::get('/testTicker', function () {
   return view('admin.mail.ticket');
});

Route::get('/home', 'HomeController@index')->name('home');

