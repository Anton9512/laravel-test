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

Route::get('/posts/first_or_create', [MyPostsController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [MyPostsController::class, 'updateOrCreate']);

