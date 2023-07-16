<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LikeController as Like;
use App\Http\Controllers\User\ReplyController as Reply;
use App\Http\Controllers\Global\ChatController as Chat;
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
	Route::resource('profile', Profile::class);
	Route::resource('materi', Materi::class);
	Route::get('/aktifitas-akun', [Activity::class, 'index'])->name('activity.index');
	Route::get('/like', [Like::class, 'index'])->name('like.index');
	Route::delete('/like/{id_like}', [Like::class, 'destroy'])->name('like.destroy');
	Route::get('/like/materi/{id_card}', [Like::class, 'store'])->name('like.store');
	Route::get('/kategori/{id}/{name_category}', [Materi::class, 'category'])->name('materi.category');
	Route::get('/materi', [Materi::class, 'index'])->name('materi.index');
	Route::get('/materi/cari', [Materi::class, 'search'])->name('materi.search');
	Route::get('/materi/{id_card}/{url_card}', [Materi::class, 'show'])->name('materi.show');
	Route::prefix('comment')->group(function(){
		Route::get('/', [Comment::class, 'index'])->name('comment.index');
		Route::post('/store/{id_card}', [Comment::class, 'store'])->name('comment.store');
		Route::get('/{id_comment}/edit', [Comment::class, 'edit'])->name('comment.edit');
		Route::put('/{id_comment}', [Comment::class, 'update'])->name('comment.update');
		Route::delete('/{id_comment}', [Comment::class, 'destroy'])->name('comment.destroy');
	});
	Route::resource('feedback', Feedback::class);
	Route::resource('forum', Forum::class);
	Route::get('/forum/balas/{id}/{url}', [Reply::class, 'create'])->name('forum.reply.create');
	Route::post('/forum/balas/{id}/{url}', [Reply::class, 'store'])->name('forum.reply.store');
	Route::get('/chat', [Chat::class, 'index']);
	Route::post('/chat/store', [Chat::class, 'store_topic']);
	Route::get('/chat/session/{session_chat}', [Chat::class, 'create_chat']);
	Route::get('/chat/linked_session/{session_chat}', [Chat::class, 'create_linked_chat']);
	Route::post('/chat/session/{session_chat}', [Chat::class, 'store_chat']);
	Route::get('/chat/{name}/{session_chat}', [Chat::class, 'create_topic']);
});
