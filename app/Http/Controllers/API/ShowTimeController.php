<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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
        return view('admin.showtime.index');
    }

    public function create()
    {
        return view('admin.showtime.create');
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
