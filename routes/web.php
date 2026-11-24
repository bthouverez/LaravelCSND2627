<?php

use Illuminate\Support\Facades\Route;
use App\Models\Dragon;
use Illuminate\Validation\Rule;

/*
Une route attend "en paramètres" une URL et un type de requête HTTP
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/bonjour', function() {
    $prenom = "Boby";

    return view('bonjour', [
        'prenom' => $prenom
    ]);
});


Route::get('/bonjour/{prenom}', function($prenom) {

    return view('bonjour', [
        'prenom' => $prenom,
        'humeur' => 'content'
    ]);
});



Route::get('/bonjour/{prenom}/{humeur}', function($prenom, $humeur) {

    return view('bonjour', [
        'prenom' => $prenom,
        'humeur' => $humeur
    ]);
});



////////////////////////
///// CRUD DRAGONS /////
////////////////////////

// action Index
Route::get('/dragons', function() {
    $dragons = Dragon::all();
    return view('index', compact('dragons') );
});


Route::get('/dragons/create', function() {
    return view('create');
});


// action Show
// il existe la méthode find($id) depuis un Model permettant de retrouver le modèle à l'id donné

Route::get('/dragons/{id}', function(int $id) {
    $dragon = Dragon::findOrFail($id);
    return view('show', compact('dragon'));
});


Route::post('/dragons', function() {

    // Valider les données
    request()->validate([
        'name' => ['required', 'min:3', 'max:20', 'unique:dragons'],
        'level' => ['required', 'integer'],
        'height' => ['required', 'decimal:2'],
        'born_at' => ['required', 'date', Rule::date()->beforeOrEqual(today())],
        'type' => ['required', Rule::in(['speed', 'strength', 'technical'])],

    ]);


    $d = new Dragon;
    $d->name = request('name');
    $d->level = request('level');
    $d->height = request('height');
    $d->born_at = request('born_at');
    $d->type = request('type');
    $d->image_path = request('image_path');
    $d->is_in_team = request('is_in_team') ? true : false;
    $d->save();

    return redirect('/dragons/'.$d->id);
});
