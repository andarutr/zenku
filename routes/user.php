<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LikeController;
use App\Http\Controllers\User\ForumController;
use App\Http\Controllers\User\ReplyController;
use App\Http\Controllers\User\MateriController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\FeedbackController;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\Global\ProfileController;
use App\Http\Controllers\User\ActivityAccountController;
use App\Http\Controllers\Global\ChangePasswordController;

Route::middleware('isUser')->group(function(){
	Route::prefix('/user')->name('user.')->group(function(){
		Route::get('/', [HomepageController::class, 'index'])->name('index');
		// Profile
		Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
		Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
		// Ganti Password
		Route::get('/ganti-password', [ChangePasswordController::class, 'index'])->name('ganti_password.index');
		Route::post('/ganti-password', [ChangePasswordController::class, 'update'])->name('ganti_password.update');
		// Aktifitas Akun
		Route::get('/aktifitas-akun', [ActivityAccountController::class, 'index'])->name('activity.index');
		// Like
		Route::get('/like', [LikeController::class, 'index'])->name('like.index');
		Route::delete('/like/{id_like}', [LikeController::class, 'destroy'])->name('like.destroy');
		Route::get('/like/materi/{id_card}', [LikeController::class, 'store'])->name('like.store');
		// Kategori Materi
		Route::get('/kategori/{id}/{name_category}', [MateriController::class, 'category'])->name('materi.category');

		// Materi
		Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
		Route::get('/materi/cari', [MateriController::class, 'search'])->name('materi.search');
		Route::get('/materi/{id_card}/{url_card}', [MateriController::class, 'show'])->name('materi.show');
		// Comment
		Route::prefix('comment')->group(function(){
			Route::get('/', [CommentController::class, 'index'])->name('comment.index');
			Route::post('/store/{id_card}', [CommentController::class, 'store'])->name('comment.store');
			Route::get('/{id_comment}/edit', [CommentController::class, 'edit'])->name('comment.edit');
			Route::put('/{id_comment}', [CommentController::class, 'update'])->name('comment.update');
			Route::delete('/{id_comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
		});
		// Feedback
		Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.index');
		Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
		// Forum
		Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
		Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');
		Route::post('/forum/store', [ForumController::class, 'store'])->name('forum.store');
		Route::get('/forum/balas/{id}/{url}', [ReplyController::class, 'create'])->name('forum.reply.create');
		Route::post('/forum/balas/{id}/{url}', [ReplyController::class, 'store'])->name('forum.reply.store');
		Route::get('/forum/{url}', [ForumController::class, 'show'])->name('forum.show');
	});
});
