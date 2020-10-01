<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showdate extends Model
{
    public function showtimes() {
        return $this->belongsToMany('App\Models\Showtime');
    }
}
