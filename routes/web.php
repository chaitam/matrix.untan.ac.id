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
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/lagu', function () {
    return view('lagu');
});

Route::get('/kontak', function () {
    return view('kontak');
});