<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeatType extends Model
{
    public function seats() {
        return $this->hasMany('App\Models\Seat');
    }
}
