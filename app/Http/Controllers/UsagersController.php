<?php

namespace App\Http\Controllers;

use App\Models\Usager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\ErrorHandler\Debug;

class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Auth.login");
    }

    public function liste()
    {
        $usagers = Usager::all();
        return view("Auth.liste", compact('usagers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UtilisateurRequest $request)
    {
        $name = request()->nom;

        //event(new PersonneAdd($name));

        try {
            $usager = new Usager($request->all());
            $usager->password = Hash::make($request->input('password'));
            $usager->save();
        } catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('usagers.liste');


        return View('Auth.liste');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usager $usager)
    {
        return View('Auth.modifier', compact('usager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UtilisateurRequest $request, Usager $usager)
    {
        try {
        
            // Vérifier si le champ du mot de passe est présent dans la requête
            //if ($request->filled('password')) {
                // Si le champ du mot de passe est présent, mettre à jour le mot de passe
                //$usager->password = Hash::make($request->input('password'));
            //}
        
            // Mettre à jour les autres champs
            $usager->nom_usager = $request->input('nom_usager');
            $usager->nom = $request->input('nom');
            $usager->prenom = $request->input('prenom');
            $usager->email = $request->input('email');
            $usager->role = $request->input('role');
        
            // Enregistrer les modifications dans la base de données
            $usager->save();
        
            return redirect()->route('usagers.liste')->with('message', "Modification de " . $usager->nom . " réussie!");
        } catch (\Throwable $e) {
            // Gérer l'erreur
            Log::error($e);
            return redirect()->route('usagers.liste')->withErrors(['La modification n\'a pas fonctionné']);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Récupérer l'usager à partir de l'ID
            $usager = Usager::findOrFail($id);
        
            // Supprimer l'usager
            $usager->delete();
        
            return redirect()->route('usagers.liste')->with('message', "Suppression de " . $usager->nom . " réussie!");
        } catch (\Throwable $e) {
            // Gérer l'erreur
            Log::error($e);
            return redirect()->route('usagers.liste')->withErrors(['La suppression n\'a pas fonctionné']);
        }
    }     

    public function login(Request $request)
    {
        $reussi = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

         if($reussi){
            return redirect()->route('netflix')->with('message', "Connexion réussie");
        }
        else{
            return redirect()->route('login')->withErrors(['Informations invalides']); 
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('message', "Bye!");
        
    }
}
