<?php

namespace App\Repositories\Seat;

use App\Models\Seat;
use App\Repositories\Base\BaseRepository;

class SeatRepository extends BaseRepository implements SeatRepositoryInterface

{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function getModel()
    {
        return Seat::class;
    }

    public function getSeatByRoom($id)
    {
        $seats = $this->model::where('room_id', $id)
                    ->get();
        return $seats;
    }

    public function getSeatByShowtime($request)
    {
        $showtimeId = $request->showtimeId;
        $roomId = $request->roomId;
        $seats = $this->model::where('room_id', $roomId)
                    ->whereHas('seatStatus', function ($query) use ($showtimeId) {
                        $query->where('showtime_id', $showtimeId);
                    })->with('seatStatus')
                    ->with('type')
                    ->get();
        return $seats;
    }

    public function getSeatById($id)
    {
        // TODO: Implement getSeatById() method.
    }

    public function getSeats()
    {
        // TODO: Implement getSeats() method.
    }
}

?>
