<?php

namespace App\Http\Controllers;
use App\Models\Film;


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
        return View('netflix.index', compact('films'));
    }

}
