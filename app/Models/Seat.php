<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function room() {
        return $this->belongsTo('App\Models\Room');
    }

    public function seatStatus() {
        return $this->belongsTo('App\Models\SeatStatus', 'id', 'seat_id');
    }

    public function type() {
        return $this->hasOne('App\Models\SeatType', 'id', 'seat_type_id')->with('price');
    }

    public function price() {
        return $this->type()->price();
    }
}
