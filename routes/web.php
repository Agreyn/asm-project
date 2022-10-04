<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/cara-pegajuan', function () {
    return view('home.cara-pegajuan');
});

Route::get('/aspirasi-masuk', function () {
    return view('aspirasi.index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function(){
        return view('users.login.index');
    });

    Route::get('/registrasi', function(){
        return view('users.registrasi.index');
    });
});


