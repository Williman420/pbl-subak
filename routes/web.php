<?php

use App\Http\Controllers\ActivityViewController;
use App\Http\Controllers\artikel_controller;
use App\Http\Controllers\NewRegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\ArtikelController; // ✅ ADD THIS
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// REGISTER
Route::post('register', function () {
    return view('register_page');
});

Route::get('register', [NewRegisteredUserController::class, 'create'])->name('register');
Route::post('register', [NewRegisteredUserController::class, 'store']);

Route::post('register_success', function () {
    return view('register_success');
});

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// PROFILE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// PENGUNJUNG
Route::get('/pengunjung', [PengunjungController::class, 'index'])->name('pengunjung.index');
Route::get('/pengunjung/create', [PengunjungController::class, 'create'])->name('pengunjung.create');
Route::post('/pengunjung', [PengunjungController::class, 'store'])->name('pengunjung.store');
Route::get('/pengunjung/{id}', [PengunjungController::class, 'show'])->name('pengunjung.show');
Route::delete('/pengunjung/{id}', [PengunjungController::class, 'destroy'])->name('pengunjung.destroy');

Route::get('/login', [PengunjungController::class, 'showLogin'])->name('login');
Route::post('/login', [PengunjungController::class, 'login'])->name('login.submit');



// STATIC PAGES
Route::get('/aboutSubak', fn() => view('about'));
Route::get('/experience', fn() => view('experience'));
Route::get('/articles', fn() => view('articles'));
Route::get('/booking_list', fn() => view('booking_list'));
Route::get('/experience_details', fn() => view('experience_details'));




use App\Http\Controllers\ArtikelViewController;
use App\Http\Controllers\HomeViewController;

Route::get('/articles', [ArtikelViewController::class, 'index'])->name('artikel.index');
Route::get('/home', [HomeViewController::class, 'homeData'])->name('home.homeData');
Route::get('/experience', [ActivityViewController::class, 'activityData'])->name('home.activityData');
