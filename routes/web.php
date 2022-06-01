<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyPostsController;


Route::get('/', function () {
    return 'Hello';
});


Route::get('/posts', [MyPostsController::class, 'index']);

