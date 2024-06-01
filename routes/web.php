<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');

// Route::view('/jogos', 'jogos');

// Route::get('/jogos', function () {
//     return "Tá estudando vagabundo";
// });

// Route::view('/jogos', 'jogos', ['name' => 'GEARS']);

// Route::get('/jogos/{name?}', function($name = null) {
//     return view('/jogos', ['nomeJogo' => $name]);
// });

// Route::get('/jogos/{name?}', function($name = null) {
//     return view('/jogos', ['nomeJogo' => $name]);
// })->where('name', '[A-Za-z]+');


// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null) {
//     return view('/jogos', ['idJogo' => $id, 'nameJogo' => $name]);
// });

Route::get('/jogos', function() {
    return view('jogos');
});