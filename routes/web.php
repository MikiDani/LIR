<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Home', ['name' => 'Miklós']);
// });

Route::get('/about', function() {
    return inertia('About');
});

Route::get('/', [NewsController::class, 'index']);
Route::resource('posts', NewsController::class)->except('index');