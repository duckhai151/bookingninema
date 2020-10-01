<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function seats() {
        return $this->hasMany('App\Models\Seat');
    }

    public function cinema() {
        return $this->belongsTo('App\Models\Cinema');
    }
}
