<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    public function rooms() {
        return $this->hasMany('App\Models\Room');
    }

    public function location() {
        return $this->belongsTo('App\Models\Location');
    }
}
