<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyPostsController;


Route::get('/', function () {
    return 'Hello';
});


Route::get('/posts', [MyPostsController::class, 'index']);
Route::get('/posts/create', [MyPostsController::class, 'create']);

