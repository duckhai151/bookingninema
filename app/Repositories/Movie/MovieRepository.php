<?php

namespace App\Repositories\Movie;

use App\Models\Movie;
use App\Models\Showtime;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Movie\MovieRepositoryInterface;

class MovieRepository extends BaseRepository implements MovieRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function getModel()
    {
        return Movie::class;
    }

    public function index()
    {
        $movies = $this->model::paginate(5);
        return $movies;
    }

    public function getMovies()
    {
        $movies = $this->model::all();
        return $movies;
    }

    public function getMovieById($id)
    {
        $movie = $this->model::findOrFail($id);
        $showtimes = Showtime::where('movie_id', $id)
                            ->get();
        $formatShowtimes = $this->formatShowtime($showtimes);
        $movie['showtimes'] = $formatShowtimes;
        return $movie;
    }

    private function formatShowtime($showtimes) {
        $formatShowtimes = [];
        foreach($showtimes as $showtime) {
            $date = explode(" ", $showtime->time);
            array_push($formatShowtimes, [
                'date' => $date[0],
                'time' => $date[1],
                'showtime_id' => $showtime->id,
                'room_id'   => $showtime->room_id,
            ]);
        }
        return $formatShowtimes;
    }
}

?>
