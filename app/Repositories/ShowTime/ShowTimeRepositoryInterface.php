<?php

namespace App\Repositories\ShowTime;

interface ShowTimeRepositoryInterface
{
    public function showtime($request);

    public function showTimeByMovie($movieId);
}

?>
