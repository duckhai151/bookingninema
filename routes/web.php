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
Route::get('/login', 'API\HomeController@index');
Route::get('/book', 'API\HomeController@index');
Route::get('/confirm', 'API\HomeController@index');
Route::get('/finish', 'API\HomeController@index');
Route::get('/movie/{id}', 'API\HomeController@index');
//Route::get('/{any}', 'API\HomeController@index')->where('any', '.*');

Route::namespace('API')->group(function () {
    Route::get('admin/login', 'AdminController@login')->name(ADMIN_LOGIN);
    Route::post('/postLogin', 'AdminController@postLogin')->name(ADMIN_LOGIN_POST);
    Route::prefix('admin')->middleware('checkAdmin')->group(function () {
        Route::get('/', 'MovieController@index');


        Route::prefix('movie')->group(function () {
            Route::get('/', 'MovieController@index')->name(ADMIN_MOVIE_INDEX);
            Route::get('/create', 'MovieController@create')->name(ADMIN_MOVIE_CREATE);
            Route::post('/store', 'MovieController@store')->name(ADMIN_MOVIE_STORE);
            Route::get('/edit/{id}', 'MovieController@edit')->name(ADMIN_MOVIE_EDIT);
            Route::post('/update/{id}', 'MovieController@update')->name(ADMIN_MOVIE_UPDATE);
            Route::get('/delete', 'MovieController@delete')->name(ADMIN_MOVIE_DELETE);
        });

        Route::prefix('room')->group(function () {
            Route::get('/', 'RoomController@index')->name(ADMIN_ROOM_INDEX);
            Route::get('/create', 'RoomController@create')->name(ADMIN_ROOM_CREATE);
            Route::get('/store', 'RoomController@store')->name(ADMIN_ROOM_STORE);
            Route::get('/edit/{id}', 'RoomController@edit')->name(ADMIN_ROOM_EDIT);
            Route::post('/update/{id}', 'RoomController@update')->name(ADMIN_ROOM_UPDATE);
            Route::get('/delete', 'RoomController@delete')->name(ADMIN_ROOM_DELETE);
        });

        Route::prefix('showtime')->group(function () {
            Route::get('/', 'ShowTimeController@index')->name(ADMIN_SHOWTIME_INDEX);
            Route::get('/create', 'ShowTimeController@create')->name(ADMIN_SHOWTIME_CREATE);
            Route::post('/store', 'ShowTimeController@store')->name(ADMIN_SHOWTIME_STORE);
            Route::get('/edit/{id}', 'ShowTimeController@edit')->name(ADMIN_SHOWTIME_EDIT);
            Route::post('/update/{id}', 'ShowTimeController@update')->name(ADMIN_SHOWTIME_UPDATE);
            Route::get('/delete', 'ShowTimeController@delete')->name(ADMIN_SHOWTIME_DELETE);
        });

        Route::prefix('ticket')->group(function () {
            Route::get('/update/{id}', 'TicketController@edit');
        });
    });
});

//Auth::routes();
Route::get('/testTicker', function () {
   return view('admin.mail.ticket');
});

Route::get('/home', 'HomeController@index')->name('home');

