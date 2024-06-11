<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviePageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        //dd(compact('movies'));
        return view('movies', compact('movies'));
    }

}

//$movie = Movie::where('vote', '>', 8.5)->get()