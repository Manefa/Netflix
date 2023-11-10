<?php

use Illuminate\Support\Facades\Route;

use App\HTTP\Controllers\PokemonsController;
use App\HTTP\Controllers\NetflixsController;
use App\HTTP\Controllers\FilmsController;
use App\HTTP\Controllers\PersonnesController;

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

Route::get('/', [NetflixsController::class, 'index'])->name('netflix');

Route::get('netflixs', [NetflixsController::class, 'index'])->name('netflix');

Route::get('/films/creation', [FilmsController::class, 'create'])->name('films.create');

Route::post('/films', [FilmsController::class, 'store'])->name('films.store');

Route::get('/personnes/liste', [PersonnesController::class, 'index'])->name('personnes.liste');

Route::get('/personnes/creation', [PersonnesController::class, 'create'])->name('personnes.create');

Route::post('/personnes',  [PersonnesController::class, 'store'])->name('personnes.store');

Route::get('/netflixs/{film}/', [FilmsController::class, 'zoom'])->name('netflixs.zoom');

Route::get('/films/{film}/', [FilmsController::class, 'show'])->name('films.show');
Route::get('/films/{film}/', [FilmsController::class, 'show'])->name('films.show');
// Mettre liens avec variables en dernier.