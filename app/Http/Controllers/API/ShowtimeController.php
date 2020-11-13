<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Showtime;
use Illuminate\Http\Request;

class ShowtimeController extends ApiController
{
   public function showtimes() {
       $showtimes = Showtime::all();
       return array_merge(self::success(), [
           'showtimes' => $showtimes,
       ]);
   }
}
