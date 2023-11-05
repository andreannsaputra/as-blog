<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Post',
            'posts' => Posts::all()
        ]);
    }

    public function getPost(Posts $posts)
    {
        return view(
            'subPost',
            [
                'title' => 'Single Post',
                'post' => $posts
            ]
        );
    }
}
