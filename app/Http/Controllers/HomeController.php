<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index() {
        // Recupera i movies dal db per passarli alla view e stamparli
        $movies = Movie::all();

        $data = [
            'movies' => $movies
        ];

        return view('homepage', $data);
    }
}
