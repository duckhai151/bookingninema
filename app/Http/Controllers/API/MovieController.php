<?php

namespace App\Http\Controllers\API;



use App\Http\Requests\CreateMovieRequest;
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

    public function create()
    {
        return view(ADMIN_MOVIE_CREATE);
    }

    public function store(CreateMovieRequest $request)
    {
        try {
            $movie = new Movie();
            $movie->name = $request->get('name');
            $movie->movie_type_id = $request->get('movie_type_id');
            $movie->description = $request->get('description');
            $movie->director = $request->get('director');
            $movie->running_time = $request->get('running_time');
            $movie->cast = $request->get('cast');
            $movie->language = $request->get('language');
            $movie->start_date = $request->get('start_date');
            $movie->end_date = $request->get('end_date');
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $imageName = $file->getClientOriginalName();
                $filename = time(). $imageName .'.'.$extension;
                $file->move(public_path('cinema/movies'), $filename);
                $movie->image = $filename;
            }
            $movie->save();
            return redirect()->route(ADMIN_MOVIE_INDEX);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function edit(Request $request, $id)
    {
        $movies = 'movie';
        return view(ADMIN_MOVIE_EDIT, ['movies' => $movies]);
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
