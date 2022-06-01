<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Post;

class MyPostsController extends Controller {
    public function index() {
        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->title);
            dump($post->content);
            dump($post->image);
            dump($post->likes);
            dump($post->is_published);
            echo '<br/>';
        }

    }
}
