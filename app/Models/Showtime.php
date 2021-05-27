<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $table = 'showtimes';

    protected $appends =[
        'date_showtime', 'time_showtime'
    ];

    public function getDateShowtimeAttribute() {
        return date('d/m', strtotime($this->time));
    }

    public function getTimeShowtimeAttribute() {
        return date('H:i', strtotime($this->time));
    }
}
