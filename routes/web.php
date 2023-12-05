<?php

use Illuminate\Support\Facades\Route;

use App\HTTP\Controllers\PokemonsController;
use App\HTTP\Controllers\NetflixsController;
use App\HTTP\Controllers\FilmsController;
use App\HTTP\Controllers\PersonnesController;
use App\HTTP\Controllers\UsagersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//Index
Route::get('/', [NetflixsController::class, 'index'])->name('netflix')->middleware('auth');

Route::get('netflixs', [NetflixsController::class, 'index'])->name('netflix')->middleware('auth');

//Création films
Route::get('/films/creation', [FilmsController::class, 'create'])->name('films.create')->middleware('auth');

Route::post('/films', [FilmsController::class, 'store'])->name('films.store')->middleware('auth');

//Afficher liste personne
Route::get('/personnes/liste', [PersonnesController::class, 'index'])->name('personnes.liste')->middleware('auth');

//Création personnes
Route::get('/personnes/creation', [PersonnesController::class, 'create'])->name('personnes.create')->middleware('auth');

Route::post('/personnes',  [PersonnesController::class, 'store'])->name('personnes.store')->middleware('auth');

//Modification personnes
Route::get('/personnes/{personne}/modifier/', 
[PersonnesController::class, 'edit'])->name('personnes.edit')->middleware('auth');

Route::patch('/personnes/{personne}/modifier', 
[PersonnesController::class, 'update'])->name('personnes.update')->middleware('auth');

//Modification films
Route::get('/films/{film}/modifier', 
[FilmsController::class, 'edit'])->name('films.edit')->middleware('auth');

Route::patch('/films/{film}/modifier', 
[FilmsController::class, 'update'])->name('films.update')->middleware('auth');

//Suppression de films
Route::delete('/films/{film}/supprimer', 
[FilmsController::class, 'destroy'])->name('films.destroy')->middleware('auth');

Route::get('/netflixs/{film}/', [FilmsController::class, 'zoom'])->name('netflixs.zoom')->middleware('auth');

Route::get('/films/{film}/', [FilmsController::class, 'show'])->name('films.show')->middleware('auth');



/*Authentification*/

Route::get('/login', [UsagersController::class, 'index'])->name('showLoginForm');

Route::post('/login', [UsagersController::class, 'login'])->name('login');

Route::post('/logout', [UsagersController::class, 'logout'])->name('logout')->middleware('auth');


// Mettre liens avec variables en dernier.