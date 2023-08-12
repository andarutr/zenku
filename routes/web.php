<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Global\BiodataController;

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

Route::redirect('/', '/login');

Route::get('/catatan-skripsi', function(){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return "dashboard";
})->middleware(['auth'])->name('dashboard');

// Route for Authentication
require __DIR__.'/auth.php';

// Route for Bio (All Roles)
Route::get('/bio/{name}', [BiodataController::class, 'show']);

// Route for Admin Role
require __DIR__.'/admin.php';

// Route for Guru Role
require __DIR__.'/guru.php';

// Route for User Role
require __DIR__.'/user.php';

// Route for Penguji Role
require __DIR__.'/penguji.php';
