<?php

namespace App\Repositories\Movie;

interface MovieRepositoryInterface
{
    public function index();

    public function getMovieById($id);

    public function getMovies();
}

?>
