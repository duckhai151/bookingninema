<?php

namespace App\Repositories\ShowTime;

use App\Models\Showtime;
use App\Repositories\Base\BaseRepository;

class ShowTimeRepository extends BaseRepository implements ShowTimeRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function getModel()
    {
        return Showtime::class;
    }

    public function showTimeByMovie($movieId)
    {
        $showtime = $this->model::where('movie_id', $movieId)->get();
        return $showtime;
    }
}

?>
