<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class FilmController extends Controller
{
    public function index() {
        $movies = Movie::all();

        return view('pages.home', compact('movies'));
    }


    public function show($movieid) {

        $movie = Movie::find($movieid);

        return view('pages.film', compact('movie'));
    }
}
