<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LikeController as Like;
use App\Http\Controllers\User\ReplyController as Reply;
use App\Http\Controllers\User\ForumController as Forum;
use App\Http\Controllers\User\MateriController as Materi;
use App\Http\Controllers\User\CommentController as Comment;
use App\Http\Controllers\Global\ProfileController as Profile;
use App\Http\Controllers\User\FeedbackController as Feedback;
use App\Http\Controllers\User\HomepageController as Homepage;
use App\Http\Controllers\User\ActivityAccountController as Activity;
use App\Http\Controllers\Global\ChangePasswordController as ChangePassword;

Route::middleware('isUser')->prefix('/user')->name('user.')->group(function(){
	Route::get('/', [Homepage::class, 'index'])->name('index');
	// Profile
	Route::get('/profile', [Profile::class, 'index'])->name('profile.index');
	Route::post('/profile', [Profile::class, 'update'])->name('profile.update');
	// Ganti Password
	Route::get('/ganti-password', [ChangePassword::class, 'index'])->name('ganti_password.index');
	Route::post('/ganti-password', [ChangePassword::class, 'update'])->name('ganti_password.update');
	// Aktifitas Akun
	Route::get('/aktifitas-akun', [Activity::class, 'index'])->name('activity.index');
	// Like
	Route::get('/like', [Like::class, 'index'])->name('like.index');
	Route::delete('/like/{id_like}', [Like::class, 'destroy'])->name('like.destroy');
	Route::get('/like/materi/{id_card}', [Like::class, 'store'])->name('like.store');
	// Kategori Materi
	Route::get('/kategori/{id}/{name_category}', [Materi::class, 'category'])->name('materi.category');

	// Materi
	Route::get('/materi', [Materi::class, 'index'])->name('materi.index');
	Route::get('/materi/cari', [Materi::class, 'search'])->name('materi.search');
	Route::get('/materi/{id_card}/{url_card}', [Materi::class, 'show'])->name('materi.show');
	// Comment
	Route::prefix('comment')->group(function(){
		Route::get('/', [Comment::class, 'index'])->name('comment.index');
		Route::post('/store/{id_card}', [Comment::class, 'store'])->name('comment.store');
		Route::get('/{id_comment}/edit', [Comment::class, 'edit'])->name('comment.edit');
		Route::put('/{id_comment}', [Comment::class, 'update'])->name('comment.update');
		Route::delete('/{id_comment}', [Comment::class, 'destroy'])->name('comment.destroy');
	});
	// Feedback
	Route::get('/feedback', [Feedback::class, 'create'])->name('feedback.index');
	Route::post('/feedback', [Feedback::class, 'store'])->name('feedback.store');
	// Forum
	Route::get('/forum', [Forum::class, 'index'])->name('forum.index');
	Route::get('/forum/create', [Forum::class, 'create'])->name('forum.create');
	Route::post('/forum/store', [Forum::class, 'store'])->name('forum.store');
	Route::get('/forum/balas/{id}/{url}', [Reply::class, 'create'])->name('forum.reply.create');
	Route::post('/forum/balas/{id}/{url}', [Reply::class, 'store'])->name('forum.reply.store');
	Route::get('/forum/{url}', [Forum::class, 'show'])->name('forum.show');
});
