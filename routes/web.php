<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Halaman utama
Route::get('/', function () {
    return Inertia::render('LandingPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Halaman dashboard
Route::get('/dashboard', function () { // Ubah '/Dashboard' menjadi '/dashboard'
    return Inertia::render('Dashboard');
})->name('dashboard'); // Ubah nama menjadi 'dashboard'

// Halaman tes gaya belajar
Route::get('/tes-gaya-belajar', function () {
    return Inertia::render('TesGayaBelajar');
})->name('tes-gaya-belajar');

// Rute untuk autentikasi dan profil
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';
