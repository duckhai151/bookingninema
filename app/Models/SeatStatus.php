<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatStatus extends Model
{
    protected $table = 'seat_status';

    public function seat() {
        return $this->hasMany('App\Models\Seat');
    }
}
