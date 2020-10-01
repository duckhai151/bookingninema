<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieType extends Model
{
    public function movies() {
        return $this->hasMany('App\Models\Movie');
    }
}
