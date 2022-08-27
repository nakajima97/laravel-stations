<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function movies()
    {
        $movies = Movie::all();
        return view("admin/movies", ["movies" => $movies]);
    }
}
