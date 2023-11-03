<?php

use Illuminate\Support\Facades\Route;

use App\HTTP\Controllers\PokemonsController;
use App\HTTP\Controllers\NetflixsController;
use App\HTTP\Controllers\FilmsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/netflix', [NetflixsController::class, 'index'])->name('netflix');

Route::get('/films/creation', [FilmsController::class, 'create'])->name('films.create');

Route::post('/films', [FilmsController::class, 'store'])->name('films.store');

Route::get('/films/{film}/', [FilmsController::class, 'show'])->name('films.show');
// Mettre liens avec variables en dernier.