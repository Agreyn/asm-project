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

Route::get('/home', function(){
    return view('home-user.dashboard.index', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/aspirasi', function(){
    return view('home-user.aspirasi.index', [
        'title' => 'aspirasi'
    ]);
});

Route::get('/profile', function(){
    return view('home-user.profile.index', [
        'title' => 'Profile'
    ]);
});

Route::get('/logout', function(){
    return view('home-user.dashboard.index');
});

Route::get('/admin', function () {
    return view('home-admin.dashboard.index');
});

Route::get('/admin/aspirasi-masuk', function () {
    return view('home-admin.aspirasi-admin.index');
});
Route::get('/admin/feedback', function () {
    return view('home-admin.feedbacks.index');
});
Route::get('/admin/profile', function () {
    return view('home-admin.profile.index', [
        'title' => 'Profile'
    ]);
});


