<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Exception;
use App\Http\Requests\admin\movies\StoreRequest;

class MovieController extends Controller
{
    function index()
    {
        $movies = Movie::all();
        return view("movies/index", ["movies" => $movies]);
    }

    function create()
    {
        return view("movies/create", []);
    }

    function store(StoreRequest $request)
    {
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->image_url = $request->input('image_url');
        $movie->published_year = $request->input('published_year');
        $movie->is_showing = $request->input('is_showing') === "on" ? true : false;
        $movie->description = $request->input('description');
        try {
            $movie->save();
        } catch (Exception) {
            $request->session()->flash('movie_store_error', '保存に失敗しました。');
        }
        return redirect('/admin/movies/create');
    }
}
