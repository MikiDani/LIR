<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',             [PageController::class, 'news']);
Route::get('/about',        [PageController::class, 'about']);





//Route::get('/about', function() { return inertia('About');});
// Route::resource('posts', PageController::class)->except('index');
