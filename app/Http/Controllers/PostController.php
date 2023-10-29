<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Post',
            'posts' => Post::getAll()
        ]);
    }

    public function getPost($slug)
    {
        return view(
            'subPost',
            [
                'title' => 'Single Post',
                'post' => Post::getPost($slug)
            ]
        );
    }
}
