<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guru\LikeController as Like;
use App\Http\Controllers\Guru\ForumController as Forum;
use App\Http\Controllers\Guru\ReplyController as Reply;
use App\Http\Controllers\Guru\MateriController as Materi;
use App\Http\Controllers\Guru\CommentController as Comment;
use App\Http\Controllers\Global\ProfileController as Profile;
use App\Http\Controllers\Guru\DashboardController as Dashboard;
use App\Http\Controllers\Global\ChangePasswordController as ChangePassword;

Route::middleware('isGuru')->prefix('guru')->name('guru.')->group(function(){
	Route::redirect('/', '/guru/dashboard');
	Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
	// Profile
	Route::get('/profile', [Profile::class, 'index'])->name('profile.index');
	Route::post('/profile', [Profile::class, 'update'])->name('profile.update');
	// Ganti Password
	Route::get('/ganti-password', [ChangePassword::class, 'index'])->name('ganti_password.index');
	Route::post('/ganti-password', [ChangePassword::class, 'update'])->name('ganti_password.update');
	// Materi
	Route::resource('materi', Materi::class);
	// Like
	Route::get('/like', [Like::class, 'index'])->name('like.index');
	// Comment
	Route::get('/komentar', [Comment::class, 'index'])->name('comment.index');
	Route::get('/komentar/{id_comment}', [Comment::class, 'show'])->name('comment.show');
	// Forum
	Route::get('/forum', [Forum::class, 'index'])->name('forum.index');
	Route::get('/forum/create', [Forum::class, 'create'])->name('forum.create');
	Route::post('/forum/store', [Forum::class, 'store'])->name('forum.store');
	Route::get('/forum/destroy/{id}', [Forum::class, 'destroy'])->name('forum.destroy');
	Route::get('/forum/balas/destroy/{id}', [Reply::class, 'destroy'])->name('forum.reply.destroy');
	Route::get('/forum/balas/{id}/{url}', [Reply::class, 'create'])->name('forum.reply.create');
	Route::post('/forum/balas/{id}/{url}', [Reply::class, 'store'])->name('forum.reply.store');
	Route::get('/forum/{url}', [Forum::class, 'show'])->name('forum.show');
});