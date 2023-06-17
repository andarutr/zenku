<?php 

use Illuminate\Support\Facades\Route;

use App\View\Components\Table\MenuList;
use App\Http\Controllers\Admin\LikeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Global\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleAccessController;
use App\Http\Controllers\Admin\ActivityAccountController;
use App\Http\Controllers\Global\ChangePasswordController;

Route::middleware('isAdmin')->group(function(){
	Route::redirect('/admin','/admin/dashboard');
	Route::prefix('admin')->name('admin.')->group(function(){
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
		// Profile
		Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
		Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
		// Ganti Password
		Route::get('/ganti-password', [ChangePasswordController::class, 'index'])->name('ganti_password.index');
		Route::post('/ganti-password', [ChangePasswordController::class, 'update'])->name('ganti_password.update');
		// Kategori
		Route::resource('kategori', CategoryController::class);
		// Menu
		Route::resource('menu', MenuController::class);
		// Role
		Route::resource('role', RoleAccessController::class);
		// Aktifitas Akun
		Route::get('/aktifitas-akun', [ActivityAccountController::class, 'index'])->name('activity.index');
		Route::get('/aktifitas-akun/destroy', [ActivityAccountController::class, 'destroy'])->name('activity.destroy');
		// Materi
		Route::prefix('materi')->group(function(){
			Route::get('/', [MateriController::class, 'index'])->name('materi.index');
			Route::get('/{id_card}', [MateriController::class, 'show'])->name('materi.show');
			Route::delete('/{id_card}', [MateriController::class, 'destroy'])->name('materi.destroy');
		});
		// Like
		Route::get('/like', [LikeController::class, 'index'])->name('like.index');
		// Comment
		Route::prefix('komentar')->group(function(){
			Route::get('/', [CommentController::class, 'index'])->name('comment.index');
			Route::get('/{id_comment}', [CommentController::class, 'show'])->name('comment.show');
			Route::delete('/{id_comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
		});
		// Feedback
		Route::prefix('feedback')->group(function(){
			Route::get('/', [FeedbackController::class, 'index'])->name('feedback.index');
			Route::get('/hapus', [FeedbackController::class, 'destroy_all'])->name('feedback.destroy_all');
			Route::delete('/{id_feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
		});
		// Account
		Route::resource('account', AccountController::class);
		Route::get('/ganti-password/akun/{id}', [AccountController::class,'ganti_password']);
		Route::post('/ganti-password/akun/{id}', [AccountController::class,'proses_ganti_password']);
	});
});