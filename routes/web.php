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
    return view('welcome');
});

Route::get('/profile', function() {
    return view('profile.index');
});

Route::get('/add-user-information', function() {
    return view('profile.add-profile');
});

Route::get('/carte-bleu', function() {
    return view('profile.carte');
});

Route::get('/licence', function() {
    return view('profile.transport');
});

Route::get('/particulier', function() {
    return view('profile.particulier');
});

Route::get('/entreprise', function() {
    return view('profile.entreprise');
});

Route::get('/actualite', function() {
    return view('actualite.index');
});
