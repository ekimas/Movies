<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MainPageController extends Controller
{
    public function store()
    {
        $movies = Movie::inRandomOrder()->limit(6)->get();

        return view('welcome')->with('movies', $movies);
    }

    public function index()
    {        
        $movies = Movie::inRandomOrder()->limit(6)->get();

        return view('site')->with('movies', $movies);
    }
}
