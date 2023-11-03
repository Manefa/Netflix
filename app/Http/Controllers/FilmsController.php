<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Personne;
use App\Models\Genre;
use Faker\Provider\ar_EG\Person;
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
        return View('Netflix.index', compact('films'));
    }

    public function show(Film $film)
    {
        return View('Netflix.zoom', compact('film'));
    }

    public function create() {
        $personnes = Personne::orderBy('nom')->get();
        $genres = Genre::orderBy('titre')->get();
        return View('Netflix.create', compact('personnes','genres'));
    }

    public function store(Request $request) {

    }

}
