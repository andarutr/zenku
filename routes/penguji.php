<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Penguji\MateriController as Materi;
use App\Http\Controllers\Global\ProfileController as Profile;
use App\Http\Controllers\Penguji\DashboardController as Dashboard;
use App\Http\Controllers\Global\ChangePasswordController as ChangePassword;

Route::middleware('isPenguji')->prefix('penguji')->name('penguji.')->group(function(){
	Route::redirect('/', '/penguji/dashboard');
	Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
	// Profile
	Route::get('/profile', [Profile::class, 'index'])->name('profile.index');
	Route::post('/profile', [Profile::class, 'update'])->name('profile.update');
	// Ganti Password
	Route::get('/ganti-password', [ChangePassword::class, 'index'])->name('ganti_password.index');
	Route::post('/ganti-password', [ChangePassword::class, 'update'])->name('ganti_password.update');
	// Materi
	Route::get('/materi', [Materi::class, 'index'])->name('materi.index');
	Route::get('/materi/{id_card}', [Materi::class, 'show'])->name('materi.show');
	Route::get('/materi/update/{id_card}', [Materi::class, 'update'])->name('materi.update');
});