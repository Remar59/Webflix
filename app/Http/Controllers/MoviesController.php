<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        return view('movies/index', [
            'movies' => Movie::all(), //categories ici peut se nommer comme on le souhaite
        ]);
    }

    public function create()
    {
        return view('movies/create');
    }

    public function store(Request $request)
    {
        //Regex qui permet de d'assurer ce qui est rentré dans le champs input
        $request->validate([
            'title' => 'required|min:2|unique:movies',
            'synopsys' => 'required|min:10',
            'duration' => 'required|numeric|gt:0',
            'youtube' => '',
            'released_at' => 'date',
        ]);

        $movie = new Movie();
//Le request name récupère le post/get de l'input
        $movie->title = $request->title;
        $movie->synopsys = $request->synopsys;
        $movie->duration = $request->duration;
        $movie->youtube = $request->youtube;
        $movie->released_at = $request->released_at;

        $movie->save(); // c'est le INSERT INTO en laravel

        return redirect('/movies');
    }
}
