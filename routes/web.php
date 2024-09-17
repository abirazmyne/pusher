<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('post');
});




Route::view('/pusher1', 'pusher1');
Route::view('/pusher2', 'pusher2');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
