<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateShowtimeRequest;
use App\Models\Movie;
use App\Models\Room;
use App\Models\Seat;
use App\Models\SeatStatus;
use App\Models\Showtime;
use App\Repositories\ShowTime\ShowTimeRepositoryInterface;
use Illuminate\Http\Request;

class ShowTimeController extends ApiController
{
    protected $showTimeRepository;

    public function __construct(ShowTimeRepositoryInterface $showTimeRepository)
    {
        $this->showTimeRepository = $showTimeRepository;
    }

    public function index()
    {
        $showtimes = Showtime::with('room', 'movie')->get();
        return view('admin.showtime.index')->with([
            'showtimes' => $showtimes,
        ]);
    }

    public function create()
    {
        return view('admin.showtime.create')->with([
            'rooms' => Room::all()->pluck('name', 'id'),
            'movies' => Movie::all()->pluck('name', 'id'),
        ]);
    }

    public function store(CreateShowtimeRequest $request)
    {
        try {
            unset($request['_token']);
            $showtime = Showtime::create($request->all());
            $seats = Seat::where('room_id', $request->room_id)->select('id')->orderBy('id')->get();
            foreach($seats as $seat) {
                SeatStatus::insert([
                    'seat_id' => $seat->id,
                    'showtime_id' => $showtime->id,
                    'status' => STATUS_SEAT_EMPTY
                ]);
            }
            return redirect()->route(ADMIN_SHOWTIME_INDEX);
        } catch (\Exception $exception) {
            return $exception;
        }

    }

    public function showtime($showtimeId) {
        $showtime = $this->showTimeRepository->showtime($showtimeId);
        return array_merge(self::success(), [
            'showtime' => $showtime,
        ]);
    }

    public function showTimeByMovie(Request $request) {
        return $this->showTimeRepository->showTimeByMovie($request->movieId);
    }
}
