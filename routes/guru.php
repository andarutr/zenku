<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guru\LikeController as Like;
use App\Http\Controllers\Guru\ForumController as Forum;
use App\Http\Controllers\Global\ChatController as Chat;
use App\Http\Controllers\Guru\ReplyController as Reply;
use App\Http\Controllers\Guru\MateriController as Materi;
use App\Http\Controllers\Guru\CommentController as Comment;
use App\Http\Controllers\Global\ProfileController as Profile;
use App\Http\Controllers\Guru\DashboardController as Dashboard;
use App\Http\Controllers\Global\ChangePasswordController as ChangePassword;

Route::middleware('isGuru')->prefix('guru')->name('guru.')->group(function(){
	Route::redirect('/', '/guru/dashboard');
	Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
	Route::resource('profile', Profile::class);
	Route::resource('materi', Materi::class);
	Route::resource('ganti-password', ChangePassword::class);
	Route::get('/like', [Like::class, 'index'])->name('like.index');
	Route::resource('komentar', Comment::class);
	Route::resource('forum', Forum::class);
	Route::get('/forum/balas/destroy/{id}', [Reply::class, 'destroy'])->name('forum.reply.destroy');
	Route::get('/forum/balas/{id}/{url}', [Reply::class, 'create'])->name('forum.reply.create');
	Route::post('/forum/balas/{id}/{url}', [Reply::class, 'store'])->name('forum.reply.store');
	Route::get('/chat', [Chat::class, 'index']);
	Route::post('/chat/store', [Chat::class, 'store_topic']);
	Route::get('/chat/session/{session_chat}', [Chat::class, 'create_chat']);
	Route::get('/chat/linked_session/{session_chat}', [Chat::class, 'create_linked_chat']);
	Route::post('/chat/session/{session_chat}', [Chat::class, 'store_chat']);
	Route::get('/chat/{name}/{session_chat}', [Chat::class, 'create_topic']);
});