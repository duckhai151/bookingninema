<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    public function movie() {
        return $this->belongsTo('App\Models\Movie');
    }

    public function room() {
        return $this->belongsTo('App\Models\Room');
    }
}
