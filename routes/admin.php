<?php 

use Illuminate\Support\Facades\Route;

use App\View\Components\Table\MenuList;
use App\Http\Controllers\Admin\MenuController as Menu;
use App\Http\Controllers\Admin\LikeController as Like;
use App\Http\Controllers\Admin\MateriController as Materi;
use App\Http\Controllers\Admin\RoleAccessController as Role;
use App\Http\Controllers\Admin\AccountController as Account;
use App\Http\Controllers\Admin\CommentController as Comment;
use App\Http\Controllers\Global\ProfileController as Profile;
use App\Http\Controllers\Admin\CategoryController as Category;
use App\Http\Controllers\Admin\FeedbackController as Feedback;
use App\Http\Controllers\Admin\DashboardController as Dashboard;
use App\Http\Controllers\Admin\ActivityAccountController as Activity;
use App\Http\Controllers\Global\ChangePasswordController as ChangePassword;

Route::middleware('isAdmin')->prefix('admin')->name('admin.')->group(function(){
	Route::redirect('/','/admin/dashboard');
	Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
	// Profile
	Route::get('/profile', [Profile::class, 'index'])->name('profile.index');
	Route::post('/profile', [Profile::class, 'update'])->name('profile.update');
	// Ganti Password
	Route::get('/ganti-password', [ChangePassword::class, 'index'])->name('ganti_password.index');
	Route::post('/ganti-password', [ChangePassword::class, 'update'])->name('ganti_password.update');
	// Kategori
	Route::resource('kategori', Category::class);
	// Menu
	Route::resource('menu', Menu::class);
	// Role
	Route::resource('role', Role::class);
	// Aktifitas Akun
	Route::get('/aktifitas-akun', [Activity::class, 'index'])->name('activity.index');
	Route::get('/aktifitas-akun/destroy', [Activity::class, 'destroy'])->name('activity.destroy');
	// Materi
	Route::prefix('materi')->group(function(){
		Route::get('/', [Materi::class, 'index'])->name('materi.index');
		Route::get('/{id_card}', [Materi::class, 'show'])->name('materi.show');
		Route::delete('/{id_card}', [Materi::class, 'destroy'])->name('materi.destroy');
	});
	// Like
	Route::get('/like', [Like::class, 'index'])->name('like.index');
	// Comment
	Route::prefix('komentar')->group(function(){
		Route::get('/', [Comment::class, 'index'])->name('comment.index');
		Route::get('/{id_comment}', [Comment::class, 'show'])->name('comment.show');
		Route::delete('/{id_comment}', [Comment::class, 'destroy'])->name('comment.destroy');
	});
	// Feedback
	Route::prefix('feedback')->group(function(){
		Route::get('/', [Feedback::class, 'index'])->name('feedback.index');
		Route::get('/hapus', [Feedback::class, 'destroy_all'])->name('feedback.destroy_all');
		Route::delete('/{id_feedback}', [Feedback::class, 'destroy'])->name('feedback.destroy');
	});
	// Account
	Route::resource('account', Account::class);
	Route::get('/ganti-password/akun/{id}', [Account::class,'ganti_password']);
	Route::post('/ganti-password/akun/{id}', [Account::class,'proses_ganti_password']);
});