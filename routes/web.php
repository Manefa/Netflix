<?php

use Illuminate\Support\Facades\Route;

use App\HTTP\Controllers\PokemonsController;
use App\HTTP\Controllers\NetflixsController;
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

Route::get('pokemons', [PokemonsController::Class, 'index']);

Route::get('netflixs', [NetflixsController::Class, 'index']);