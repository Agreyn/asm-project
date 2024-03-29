<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\PostAspirasiController;
use App\Http\Controllers\AdminAspirasiController;

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
    return view('home.index', [
        'title' => 'Welcome web aspirasi',
    ]);
});

Route::get('/cara-pegajuan', function () {
    return view('home.cara-pegajuan', [
        'title' => 'cara-pegajuan aspirasi'
    ]);
});

Route::get('/aspirasi-masuk', [PostAspirasiController::class, 'index']);

Route::get('/aspirasi-masuk/{aspirasi:slug}', [PostAspirasiController::class, 'show']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('login');

    Route::post('/login', [UserController::class, 'login']);

    Route::resource('/registrasi', RegistrasiController::class)->only(['create', 'store']);
});

Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('/home', [AspirasiController::class, 'show']);

    Route::resource('/aspirasi', AspirasiController::class)->except('index', 'edit', 'update');
    
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/{user:slug} ', [ProfileController::class, 'show']);
});


Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    
    Route::get('/admin', [AdminAspirasiController::class, 'index']);

    Route::get('/admin/aspirasi-masuk', [AdminAspirasiController::class, 'showAll']);
    // Route::get('/admin/aspirasi-masuk/{aspirasi:slug}', [AdminAspirasiController::class, 'show']);
    Route::get('/admin/aspirasi-edit/{aspirasi:slug}', [AdminAspirasiController::class, 'edit']);
    Route::post('/admin/aspirasi-edit/{aspirasi:slug}', [AdminAspirasiController::class, 'update']);
    
    Route::get('/admin/feedback', function () {
        return view('home-admin.feedbacks.index');
    });
    Route::get('/admin/profile', function () {
        return view('home-admin.profile.index', [
            'title' => 'Profile'
        ]);
    });
});

Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');



