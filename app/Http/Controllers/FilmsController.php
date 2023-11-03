<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Retourne tous les films pour la page accueil.
     *
     * @return  \Illuminate\View\View
     */
    public function index()
    {
        //C'est le contrôleur qui interroge la BD et passe les information à la Vue.
        $films = Film::all();
        $genres = Genre::all();
        return View('Netflix.index', compact('films', 'genres'));
    }

    public function show(Film $film)
    {
        return View('Netflix.zoom', compact('film'));
    }

}
