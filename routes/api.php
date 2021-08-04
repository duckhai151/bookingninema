<?php

use API\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('API')->group(function () {
    /* Movie */
    Route::prefix('movie')->group(function () {
        Route::get('/', 'MovieController@movies');
        Route::get('/{id}', 'MovieController@movie');
    });

    /* Seat */
    Route::prefix('seat')->group(function () {
        Route::get('/', 'SeatController@seatByShowtime');
        Route::get('/{movieId}', 'SeatController@seatByRoom');
    });

    /* Room */
    Route::prefix('room')->group(function () {
        Route::get('/room', 'RoomController@room');
    });

    /* Ticket */
    Route::prefix('ticket')->group(function () {
        Route::post('/store', 'TicketController@store');
    });

    /* Showtime */
    Route::prefix('showtime')->group(function () {
        Route::get('/', 'ShowTimeController@showTimeByMovie');
        Route::get('/{showtimeId}', 'ShowTimeController@showtime');
    });

    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('auth', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});



