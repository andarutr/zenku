<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guru\LikeController;
use App\Http\Controllers\Guru\ForumController;
use App\Http\Controllers\Guru\ReplyController;
use App\Http\Controllers\Guru\MateriController;
use App\Http\Controllers\Guru\CommentController;
use App\Http\Controllers\Global\ProfileController;
use App\Http\Controllers\Guru\DashboardController;
use App\Http\Controllers\Global\ChangePasswordController;

Route::middleware('isGuru')->group(function(){
	Route::redirect('/guru', '/guru/dashboard');
	Route::prefix('guru')->name('guru.')->group(function(){
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
		// Profile
		Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
		Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
		// Ganti Password
		Route::get('/ganti-password', [ChangePasswordController::class, 'index'])->name('ganti_password.index');
		Route::post('/ganti-password', [ChangePasswordController::class, 'update'])->name('ganti_password.update');
		// Materi
		Route::resource('materi', MateriController::class);
		// Like
		Route::get('/like', [LikeController::class, 'index'])->name('like.index');
		// Comment
		Route::get('/komentar', [CommentController::class, 'index'])->name('comment.index');
		Route::get('/komentar/{id_comment}', [CommentController::class, 'show'])->name('comment.show');
		// Forum
		Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
		Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');
		Route::post('/forum/store', [ForumController::class, 'store'])->name('forum.store');
		Route::get('/forum/destroy/{id}', [ForumController::class, 'destroy'])->name('forum.destroy');
		Route::get('/forum/balas/destroy/{id}', [ReplyController::class, 'destroy'])->name('forum.reply.destroy');
		Route::get('/forum/balas/{id}/{url}', [ReplyController::class, 'create'])->name('forum.reply.create');
		Route::post('/forum/balas/{id}/{url}', [ReplyController::class, 'store'])->name('forum.reply.store');
		Route::get('/forum/{url}', [ForumController::class, 'show'])->name('forum.show');
	});
});