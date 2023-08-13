<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\LikeController as Like;
use App\Http\Controllers\Admin\MenuController as Menu;
use App\Http\Controllers\Global\ChatController as Chat;
use App\Http\Controllers\Admin\MateriController as Materi;
use App\Http\Controllers\Admin\AccountController as Account;
use App\Http\Controllers\Admin\CommentController as Comment;
use App\Http\Controllers\Admin\RoleAccessController as Role;
use App\Http\Controllers\Global\ProfileController as Profile;
use App\Http\Controllers\Admin\CategoryController as Category;
use App\Http\Controllers\Admin\FeedbackController as Feedback;
use App\Http\Controllers\Admin\DashboardController as Dashboard;
use App\Http\Controllers\Admin\ActivityAccountController as Activity;
use App\Http\Controllers\Global\ChangePasswordController as ChangePassword;

Route::middleware('isAdmin')->prefix('admin')->name('admin.')->group(function(){
	Route::redirect('/','/admin/dashboard');
	Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
	Route::resource('profile', Profile::class);
	Route::resource('ganti-password', ChangePassword::class);
	Route::resource('kategori', Category::class);
	Route::resource('menu', Menu::class);
	Route::resource('role', Role::class);
	Route::resource('aktifitas-akun', Activity::class);
	Route::resource('materi', Materi::class);
	Route::resource('like', Like::class);
	Route::resource('komentar', Comment::class);
	Route::resource('feedback', Feedback::class);
	Route::get('/feedback/hapus/{id}', [Feedback::class, 'destroy_all'])->name('feedback.destroy_all');
	Route::resource('account', Account::class);
	Route::get('/ganti-password/akun/{id}', [Account::class,'ganti_password']);
	Route::post('/ganti-password/akun/{id}', [Account::class,'proses_ganti_password']);
	Route::get('/chat', [Chat::class, 'index']);
	Route::post('/chat/store', [Chat::class, 'store_topic']);
	Route::get('/chat/session/{session_chat}', [Chat::class, 'create_chat']);
	Route::get('/chat/linked_session/{session_chat}', [Chat::class, 'create_linked_chat']);
	Route::post('/chat/session/{session_chat}', [Chat::class, 'store_chat']);
	Route::get('/chat/{name}/{session_chat}', [Chat::class, 'create_topic']);
});