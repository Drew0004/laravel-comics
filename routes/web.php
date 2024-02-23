<?php

use Illuminate\Support\Facades\Route;

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
    $comics = config('comics');

    return view('welcome', $comics);
});

Route::get('/characters', function () {
    return view('subpages.characters');
});

/*
    compact: crea un array associativo le cui chiavi sono le stringhe
             che mettiamo tra le parentesi, mentre i valori di tali
             chiavi sono i valori delle variabili con i nomi corrispondenti
             alle stringhe inserite

    compact('firstName', 'lastName')
     |                                     |
     V                                     V

     [
        'firstName' => $firstName,
        'lastName' => $lastName,
     ]
*/

/*
    dd: vuol dire dump and die, cioè fai il var_dump (più carino però)
        e poi stoppa l'esecuzione
*/
// dd(compact('firstName', 'lastName'));
