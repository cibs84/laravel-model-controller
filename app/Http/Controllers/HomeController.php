<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'kaiser' => 'bollente'
        ];

        return view('homepage', $data);
    }
}
