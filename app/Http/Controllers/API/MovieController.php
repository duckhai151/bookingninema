<?php

namespace App\Http\Controllers\API;



use App\Jobs\SendEmail;
use App\Repositories\Movie\MovieRepositoryInterface;
use App\Models\Movie;
use App\Models\Showdate;
use App\Models\Showtime;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MovieController extends ApiController
{
    protected $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function index()
    {
        $movies = $this->movieRepository->index();
        return view(ADMIN_MOVIE_INDEX, ['movies' => $movies]);
    }

    public function create(Request $request)
    {
        return view(ADMIN_MOVIE_CREATE);
    }

    public function edit(Request $request, $id)
    {
        $movies = 'movie';
        return view(ADMIN_MOVIE_EDIT, ['movies' => $movies]);
    }

    public function testMail()
    {
        SendEmail::dispatch('abc', 'def');
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
