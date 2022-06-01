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

    public function create() {
        $postsArr = [
            [
              'title' => 'Title 3',
              'content' => 'Content 3',
              'image' => 'Image 3',
              'likes' => 30,
               'is_published' => 1,
            ],
            [
                'title' => 'Title 4',
                'content' => 'Content 4',
                'image' => 'Image 4',
                'likes' => 40,
                'is_published' => 1,
            ],
        ];
        foreach ($postsArr as $item) {
            Post::create($item);
        }
        dd('created');
    }

    public function update() {
        $post = Post::find(4);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 50,
            'is_published' => 0,
        ]);
        dd('updated');
    }
}
