<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatStatus extends Model
{
    protected $table = 'seat_status';

    protected $fillable = ['id', 'seat_id', 'status', 'showtime_id'];

    public function seat() {
        return $this->hasMany('App\Models\Seat');
    }
}
