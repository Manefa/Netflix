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

Route::get('/', [NetflixsController::class, 'index'])->name('netflix')->middleware('auth');

Route::get('netflixs', [NetflixsController::class, 'index'])->name('netflix')->middleware('auth');

Route::get('/films/creation', [FilmsController::class, 'create'])->name('films.create')->middleware('auth');

Route::post('/films', [FilmsController::class, 'store'])->name('films.store')->middleware('auth');

// film par genre
Route::get('/films/parGenre', [FilmsController::class, 'filmsParGenre'])->name('films.parGenre');


/*Personne Route Bigin*/

Route::get('/personnes/liste', [PersonnesController::class, 'index'])->name('personnes.liste')->middleware('auth');

Route::get('/personnes/{personne}/', [PersonnesController::class, 'show'])->name('personnes.show')->middleware('auth');

Route::get('/personnes/creation', [PersonnesController::class, 'create'])->name('personnes.create')->middleware('auth');

Route::post('/personnes', [PersonnesController::class, 'store'])->name('personnes.store')->middleware('auth');

Route::get(
    '/personnes/{personne}/modifier/',
    [PersonnesController::class, 'edit']
)->name('personnes.edit')->middleware('auth');

Route::patch('/personnes/{personne}/modifier', 
[PersonnesController::class, 'update'])->name('personnes.update')->middleware('auth');

Route::delete(
    '/personnes/{personne}',
    [PersonnesController::class, 'destroy']
)->name('personnes.destroy')->middleware('auth');

/*Personne Route End*/


Route::get('/netflixs/{film}/', [FilmsController::class, 'zoom'])->name('netflixs.zoom')->middleware('auth');

Route::get('/films/{film}/', [FilmsController::class, 'show'])->name('films.show')->middleware('auth');



/*Authentification Route Bigin*/

Route::get('/login', [UsagersController::class, 'index'])->name('showLoginForm');

Route::post('/login', [UsagersController::class, 'login'])->name('login');

Route::post('/logout', [UsagersController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/usager/liste', [UsagersController::class, 'liste'])->name('usagers.liste')->middleware('auth');

Route::get('/usager/creation', [UsagersController::class, 'create'])->name('usagers.ajouter')->middleware('auth');

Route::post('/usager', [UsagersController::class, 'store'])->name('usagers.store')->middleware('auth');

Route::get('/usagers/{usager}/modifier/',[UsagersController::class, 'edit'])->name('usagers.edit')->middleware('auth');

Route::patch('/usagers/{usager}/modifier', [UsagersController::class, 'update'])->name('usagers.update')->middleware('auth');

Route::delete('/usagers/{usager}',[UsagersController::class, 'destroy'])->name('usagers.destroy')->middleware('auth');

/*Authentification Route End*/


// Mettre liens avec variables en dernier.