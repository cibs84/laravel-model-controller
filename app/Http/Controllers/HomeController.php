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
            'movies' => $movies,
            'posters' => [
                [
                    'id' => 1,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg'
                ],
                [
                    'id' => 2,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg'
                ],
                [
                    'id' => 3,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg'
                ],
                [
                    'id' => 4,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg'
                ],
                [
                    'id' => 5,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg'
                ],
                [
                    'id' => 6,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg'
                ],
                [
                    'id' => 7,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg'
                ],
                [
                    'id' => 8,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fVqKwpvobwWy0P1UImZWIDuw4RI.jpg'
                ],
                [
                    'id' => 9,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qKMqJCldp5fPsuv6Vb0RbKY9K8U.jpg'
                ],
                [
                    'id' => 10,
                    'url' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg'
                ],
            ]
        ];
        return view('homepage', $data);
    }
}
