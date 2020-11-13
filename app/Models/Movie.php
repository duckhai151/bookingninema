<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }

    public function showtimes() {
        return $this->hasMany('App\Models\Showtime');
    }

    public static function movies() {
        $movies = Movie::whereTime('end_date', '>', Carbon::now())
                    ->with('categories')
                    ->get();
        return $movies;
    }
}
