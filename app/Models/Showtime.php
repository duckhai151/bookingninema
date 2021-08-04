<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $table = 'showtimes';

    protected $guarded = [];

    public $timestamps = false;

    protected $appends =[
        'date_showtime', 'time_showtime'
    ];

    public function getDateTimeShowtinmeAttribute() {
        return date('d/m/Y', strtotime($this->time)) . ' - ' . date('H:i', strtotime($this->time));
    }

    public function getDateShowtimeAttribute() {
        return date('d/m', strtotime($this->time));
    }

    public function getTimeShowtimeAttribute() {
        return date('H:i', strtotime($this->time));
    }

    public function room() {
        return $this->hasOne('App\Models\Room', 'id', 'room_id');
    }

    public function movie() {
        return $this->hasOne('App\Models\Movie', 'id', 'movie_id');
    }
}
