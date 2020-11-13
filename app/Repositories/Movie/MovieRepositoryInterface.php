<?php

namespace App\Repositories\Movie;

interface MovieRepositoryInterface
{
    public function getMovieById($id);

    public function getMovies();

}

?>
