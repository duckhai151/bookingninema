<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatType extends Model
{
    protected $table = 'seat_types';

    public function seats() {
        return $this->hasMany('App\Models\Seat');
    }

    public function  price() {
        return $this->hasOne('App\Models\Price', 'id', 'price_id');
    }
}
