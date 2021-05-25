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

    public function form()
    {
        return view('pages.form');

    }

    public function store(Request $request) {
        // dd($request -> all());
        $validate = $request -> validate([
            'title' => 'nullable|max:100',
            'original_title' => 'nullable|max:100',
            'nationality' => 'nullable|max:20',
            'date' => 'nullable',
            'vote' => 'nullable|max:10'
        ]);

        $movie = Movie::create($validate);
        return redirect() -> route('movie', $movie -> id);
    }
}
