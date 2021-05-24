<?php

namespace App\Repositories\Seat;

interface SeatRepositoryInterface
{
    public function getSeatById($id);

    public function getSeats();

    public function getSeatByRoom($id);

    public function getSeatByShowtime($request);
}

?>
