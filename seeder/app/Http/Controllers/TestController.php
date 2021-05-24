<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class TestController extends Controller
{
    public function home(){

        $movies = Movie::all();

        return view('pages.home', compact(
            'movies'
        ));
    }

    public function movie($id)
    {
        $movie = Movie::findOrFail($id);

        return view('pages.movie', compact('movie'));
    }

}
