<?php

namespace App\Http\Controllers;

use App\Events\PersonneAdd;
use App\Http\Requests\PersonneRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Personne;


class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $champ = request('champ');
        $valeur = request('valeur'); // Ajoutez cette ligne pour récupérer la valeur

        // Filtrer et trier en fonction du champ
        $personnes = Personne::when($champ == 'sexe' && $valeur == 'homme', function ($query) {
            return $query->where('sexe', 'M')->orderBy('date_naissance', 'asc');
        })
            ->when($champ == 'sexe' && $valeur == 'femme', function ($query) {
                return $query->where('sexe', 'F')->orderBy('date_naissance', 'asc');
            })
            ->when($champ == 'age', function ($query) {
                return $query->orderBy('date_naissance', 'desc');
            })
            ->when($champ == 'rafraichir', function ($query) {
                // Ne pas appliquer de filtre ni de tri
            })
            ->get();

        return view('Personne.liste', compact('personnes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('personne.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = request()->nom;

        event(new PersonneAdd($name));

        try {
            $personne = new Personne($request->all());
            $personne->save();
        } catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('personnes.create');


        return View('personnes.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personne $personne)
    {
        return View('personne.modifier', compact('personne'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonneRequest $request, Personne $personne)
    {
        try {
            $personne->nom = $request->nom;
            $personne->date_naissance = $request->date_naissance;
            $personne->photo = $request->photo;
            $personne->role_principal = $request->role_principal;
            $personne->biographie = $request->biographie;

            $personne->save();
            return redirect()->route('personnes.liste')->with('message', "Modification de " . $personne->nom . " réussi!");
        } catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
            return redirect()->route('personnes.liste')->withErrors(['la modification n\'a pas fonctionné']);
        }
        return redirect()->route('personnes.liste');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
