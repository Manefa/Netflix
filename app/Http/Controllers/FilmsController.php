<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Personne;
use App\Models\Genre;
use App\Models\Langue;
use App\Models\Sous_titre;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FilmRequest;

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

    public function create()
    {
        $films = Film::all();
        $genres = Genre::all();
        $personnes = Personne::all();
        $langues = Langue::all();
        $sous_titres = Sous_titre::all();
        return View('Netflix.create', compact('films', 'genres', 'personnes', 'langues', 'sous_titres'));
    }

    
    public function store(FilmRequest $request) {
        try {
            $film = new Film($request->all());
            //dd($film);
            //dd($request);
            $film->save();
            $film->genres()->attach($request->input('genre_id'), ['created_at' => now(), 'updated_at' => now()]);
            $film->acteurs()->attach($request->input('personne_id'), ['created_at' => now(), 'updated_at' => now()]);
            $film->langues()->attach($request->input('langue_id'), ['created_at' => now(), 'updated_at' => now()]);
            $film->sous_titres()->attach($request->input('sous_titre_id'), ['created_at' => now(), 'updated_at' => now()]);
        } catch (\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('netflix');
    }

    public function edit(Film $film) {

        $genres = Genre::all();
        $personnes = Personne::all();
        $langues = Langue::all();
        $sous_titres = Sous_titre::all();
        return View('Netflix.edit', compact('film', 'genres', 'personnes', 'langues', 'sous_titres'));
    }

    public function update(FilmRequest $request, Film $film) {
        try {
            $film->genres()->detach();
            $film->acteurs()->detach();
            $film->langues()->detach();
            $film->sous_titres()->detach();
            
            $film->titre = $request->titre;
            $film->resume = $request->resume;
            $film->duree = $request->duree;
            $film->annee_de_production = $request->annee_de_production;
            $film->brand = $request->brand;
            $film->realisateur_id = $request->realisateur_id;
            $film->producteur_id= $request->producteur_id;
            $film->lienfilm= $request->lienfilm;
            $film->couverture_url= $request->couverture_url;
            $film->pochette_url= $request->pochette_url;
            $film->cote= $request->cote;
            $film->notation= $request->notation;

            $film->save();
            $film->genres()->attach($request->input('genre_id'), ['created_at' => now(), 'updated_at' => now()]);
            $film->acteurs()->attach($request->input('personne_id'), ['created_at' => now(), 'updated_at' => now()]);
            $film->langues()->attach($request->input('langue_id'), ['created_at' => now(), 'updated_at' => now()]);
            $film->sous_titres()->attach($request->input('sous_titre_id'), ['created_at' => now(), 'updated_at' => now()]);
        }
        catch(\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('netflix');
    }

    public function destroy($id) {
        try {
            $film = Film::findOrFail($id);

            $film->genres()->detach();
            $film->acteurs()->detach();
            $film->langues()->detach();
            $film->sous_titres()->detach();
            
            $film->delete();
            
        }
        catch(\Throwable $e) {
            Log::debug($e);
        }
        return redirect()->route('netflix');
    }

}
