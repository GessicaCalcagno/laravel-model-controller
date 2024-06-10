<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviePageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
}
