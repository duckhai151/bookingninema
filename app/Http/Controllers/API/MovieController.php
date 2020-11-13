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
        $movies = $this->movieRepository->getMovieById(1);
        return $movies;
    }

    public function movies()
    {
        $movies = Movie::movies();
        return array_merge(self::success(), [
            'movies' => $movies,
        ]);
    }

    public function movie(Request $request)
    {
        $movie = $this->movieRepository->getMovieById($request->id);
        return array_merge(self::success(), [
            'movie' => $movie,
        ]);
    }

    
}
