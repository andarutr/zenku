<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Penguji\MateriController as Materi;
use App\Http\Controllers\Global\ProfileController as Profile;
use App\Http\Controllers\Penguji\DashboardController as Dashboard;
use App\Http\Controllers\Global\ChangePasswordController as ChangePassword;

Route::middleware('isPenguji')->prefix('penguji')->name('penguji.')->group(function(){
	Route::redirect('/', '/penguji/dashboard');
	Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
	Route::resource('profile', Profile::class);
	Route::resource('ganti-password', ChangePassword::class);
	Route::resource('materi', Materi::class);
});