<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\PageController;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

// BACKEND
Route::post('/changelang', 				[BackendController::class, 'changelang'])->name('changelang');

Route::middleware(['web', 'auth', \App\Http\Middleware\LanguageMiddleware::class])->group(function() {
	Route::get ('/admin/index', 				[BackendController::class, 'admin_index'])->name('admin_index');

	# news
	Route::get ('/admin/news', 					[BackendController::class, 'admin_news'])->name('admin_news');
	
	Route::get ('/admin/news/new', 				[BackendController::class, 'admin_news_new'])->name('admin_news_new');
	Route::post('/admin/news/new', 				[BackendController::class, 'admin_news_new_post']);

	Route::get ('/admin/news/modify/{id}',		[BackendController::class, 'admin_news_modify'])->name('admin_news_modify');
	Route::post('/admin/news/modify/{id}',		[BackendController::class, 'admin_news_modify_post']);
	
	Route::get ('/admin/news/img/delete/{id}',	[BackendController::class, 'admin_news_img_delete'])->name('admin_news_img_delete');
	Route::get ('/admin/news/delete/{id}',		[BackendController::class, 'admin_news_delete'])->name('admin_news_delete');
	# ----

	Route::get ('/admin/user', 					[BackendController::class, 'admin_user'])->name('admin_user');
	Route::post('/admin/modify', 				[AuthenticationController::class, 'admin_modify_post'])->name('admin_modify_post');
	Route::get ('/admin/logout', 				[AuthenticationController::class, 'admin_logout'])->name('admin_logout');
	Route::post('/admin/unsubscribe',  			[AuthenticationController::class,'admin_unsubscribe'])->name('admin_unsubscribe');
});

Route::middleware([\App\Http\Middleware\LanguageMiddleware::class, RedirectIfAuthenticated::class])->group(function () {
	Route::get ('/admin/login', 				[AuthenticationController::class, 'admin_login'])->name('admin_login');
	Route::get ('/admin/login', 				[AuthenticationController::class, 'admin_login'])->name('login');

	Route::post('/admin/login', 				[AuthenticationController::class, 'admin_login_post'])->name('admin_login_post');
	Route::get ('/admin/registration', 			[AuthenticationController::class, 'admin_registration'])->name('admin_registration');
	Route::post('/admin/registration', 			[AuthenticationController::class, 'admin_registration_post'])->name('admin_registration_post');
	
	Route::post('/admin/forgotemail', 			[AuthenticationController::class, 'admin_forgotemail_post'])->name('admin_forgotemail_post');
	Route::get('/admin/confirmation', 			[AuthenticationController::class, 'admin_confirmation'])->name('admin_confirmation');

	Route::get('/admin/newpass', 				[AuthenticationController::class, 'admin_newpass'])->name('admin_newpass');
	Route::post('/admin/newpass', 				[AuthenticationController::class, 'admin_newpass_post'])->name('admin_newpass_post');
});

// FRONTEND
Route::get('/',            			 			[PageController::class, 'start'])->name('start');
Route::get('/news',        			 			[PageController::class, 'news'])->name('news');
Route::get('/music',       						[PageController::class, 'music'])->name('music');
Route::get('/code',       						[PageController::class, 'code'])->name('code');
