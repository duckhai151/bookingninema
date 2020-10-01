<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function room() {
        return $this->belongsTo('App\Models\Room');
    }

    public function type() {
        return $this->belongsTo('App\Models\SeatType');
    }
}
