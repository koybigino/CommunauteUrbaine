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

Route::get('/autorisation-circuler', function() {
    return view('profile.autorisation');
});

Route::get('/actualite', function() {
    return view('actualite.index');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/parking', function() {
    return view('profile.parking');
});