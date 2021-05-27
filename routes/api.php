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

    /* Showtime */
    Route::prefix('showtime')->group(function () {
        Route::get('/', 'ShowTimeController@showTimeByMovie');
        Route::get('/{movieId}', 'ShowTimeController@showTimeByMovie');
    });
});



