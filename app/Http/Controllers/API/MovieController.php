<?php

namespace App\Http\Controllers\API;



use App\Repositories\Movie\MovieRepositoryInterface;
use App\Models\Movie;
use App\Models\Showdate;
use App\Models\Showtime;
use Illuminate\Http\Request;

class MovieController extends ApiController
{
    protected $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function getPost($id)
    {
        $movies = $this->movieRepository->getMovieById($id);
        return $movies;
    }

    public function movies()
    {
        $movies = $this->movieRepository->getMovies();
        return array_merge(self::success(), [
            'movies' => $movies,
        ]);
    }

    public function movie(Request $request, $id)
    {
        $movie = $this->movieRepository->getMovieById($id);
        return array_merge(self::success(), [
            'movie' => $movie,
        ]);
    }


}
