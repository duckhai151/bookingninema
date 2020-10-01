<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function cinemas() {
        return $this->hasMany('App\Models\Cinema');
    }
}
