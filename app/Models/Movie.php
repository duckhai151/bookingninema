<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    public function categories() {
        return $this->belongsToMany('App\Models\Category');
    }

    public function showtime() {
        return $this->belongsTo('App\Models\Showtime', 'id', 'movie_id');
    }

    public static function movies() {
        $movies = Movie::whereTime('end_date', '>', Carbon::now())
                    ->with('categories')
                    ->get();
        return $movies;
    }
}
