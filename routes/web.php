<?php


use App\Http\Controllers\NewRegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('register', function () {
    return view('register_page');
});


route::get('register', [NewRegisteredUserController::class, 'create'])->name('register');
route::post('register', [NewRegisteredUserController::class, 'store']);


Route::post('register_success', function () {
    return view('register_success');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






require __DIR__ . '/auth.php';


use App\Http\Controllers\PengunjungController;

Route::get('/pengunjung', [PengunjungController::class, 'index'])->name('pengunjung.index');
Route::get('/pengunjung/create', [PengunjungController::class, 'create'])->name('pengunjung.create');
Route::post('/pengunjung', [PengunjungController::class, 'store'])->name('pengunjung.store');
Route::get('/pengunjung/{id}', [PengunjungController::class, 'show'])->name('pengunjung.show');
Route::delete('/pengunjung/{id}', [PengunjungController::class, 'destroy'])->name('pengunjung.destroy');

Route::get('/login', [PengunjungController::class, 'showLogin'])->name('login');
Route::post('/login', [PengunjungController::class, 'login'])->name('login.submit');


Route::get('/home', [PengunjungController::class, 'home'])->name('home');
Route::get('/aboutSubak', function () {
    return view('about');
});

Route::get('/articles',  function () {
    return view('articles');
});
