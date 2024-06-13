<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $moviesList = Movie::all();
         return view("movie",compact("moviesList"));
    }
}
