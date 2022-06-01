<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyPosts;


Route::get('/', function () {
    return 'Hello';
});


Route::get('/posts', [MyPosts::class, 'index']);

