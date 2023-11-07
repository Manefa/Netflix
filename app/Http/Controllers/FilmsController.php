<?php

namespace App\Http\Controllers;
use App\Models\Film;
use App\Models\Personne;
use App\Models\Genre;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $genres = Genre::all(); //On va pouvoir l'enlever + tard
        return View('Netflix.index', compact('films', 'genres'));
    }

    public function show(Film $film)
    {
        return View('Netflix.zoom', compact('film'));
    }

    public function create() {
        $films = Film::all();
        $genres = Genre::orderBy('titre')->get();
        return View('Netflix.create', compact('films','genres'));
    }


    public function store(Request $request) {
        try {
            $film = new Film($request->all());
            $film->save();
        }
        catch(\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('netflix');
    }

    public function storeFilmPersonne(Request $request) {
        try {
            $film = Film::find($request->film_id);
            $personne = Personne::find($request->personne_id);

        }
        catch(\Throwable $e) {
            Log::debug($e);
        }
    }

}
