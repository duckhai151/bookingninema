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

    public function showTimeByMovie($movieId) {
        return $this->showTimeRepository->showTimeByMovie($movieId);
    }
}
