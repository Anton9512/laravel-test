<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyPostsController;


Route::get('/', function () {
    return 'Hello';
});


Route::get('/posts', [MyPostsController::class, 'index']);
Route::get('/posts/create', [MyPostsController::class, 'create']);
Route::get('/posts/update', [MyPostsController::class, 'update']);
Route::get('/posts/delete', [MyPostsController::class, 'delete']);

