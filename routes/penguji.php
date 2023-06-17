<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Penguji\MateriController;
use App\Http\Controllers\Global\ProfileController;
use App\Http\Controllers\Penguji\DashboardController;
use App\Http\Controllers\Global\ChangePasswordController;

Route::middleware('isPenguji')->group(function(){
	Route::redirect('/penguji', '/penguji/dashboard');
	Route::prefix('penguji')->name('penguji.')->group(function(){
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
		// Profile
		Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
		Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
		// Ganti Password
		Route::get('/ganti-password', [ChangePasswordController::class, 'index'])->name('ganti_password.index');
		Route::post('/ganti-password', [ChangePasswordController::class, 'update'])->name('ganti_password.update');
		// Materi
		Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
		Route::get('/materi/{id_card}', [MateriController::class, 'show'])->name('materi.show');
		Route::get('/materi/update/{id_card}', [MateriController::class, 'update'])->name('materi.update');
	});
});