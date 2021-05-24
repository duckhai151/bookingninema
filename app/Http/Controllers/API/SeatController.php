<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\Seat\SeatRepositoryInterface;
use Illuminate\Http\Request;

class SeatController extends ApiController
{
    protected $seatRepository;

    public function __construct(SeatRepositoryInterface $seatRepository)
    {
        $this->seatRepository = $seatRepository;
    }

    public function seatByRoom(Request $request, $roomId) {
        $seats = $this->seatRepository->getSeatByRoom($roomId);
        return $seats;
    }

    public function seatByShowtime(Request $request) {
        $seats = $this->seatRepository->getSeatByShowtime($request);
        return $seats;
    }
}
