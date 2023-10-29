<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'name' => 'Muhammad Andrean Saputra',
        'email' => 'andreannsaputra@gmail.com',
        'title' => 'About'
    ]);
});


Route::get('/posts', function () {
    $blog_posts = [
        [
            'title' => "Judul Post Pertama",
            'slug' => "judul-post-pertama",
            'author' => "M Andrean S",
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quas minus quae, voluptatem laborum praesentium odio qui distinctio consequatur provident ipsum, ea nemo quos fugit! Eum tempora tenetur fugiat minus praesentium ut ullam soluta eos repellat sit cum ex dicta veniam asperiores quas eveniet sed molestias, natus quia optio rerum quod placeat! Aspernatur laborum temporibus commodi dolores iusto molestias rem provident voluptatum magnam atque eligendi animi asperiores vel, impedit eaque ipsum pariatur, voluptatem corporis, ipsa beatae totam architecto et ea."
        ],
        [
            'title' => "Judul Post Kedua",
            'slug' => "judul-post-kedua",
            'author' => "M Bagas S",
            'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quas minus quae, voluptatem laborum praesentium odio qui distinctio consequatur provident ipsum, ea nemo quos fugit! Eum tempora tenetur fugiat minus praesentium ut ullam soluta eos repellat sit cum ex dicta veniam asperiores quas eveniet sed molestias, natus quia optio rerum quod placeat! Aspernatur laborum temporibus commodi dolores iusto molestias rem provident voluptatum magnam atque eligendi animi asperiores vel, impedit eaque ipsum pariatur, voluptatem corporis, ipsa beatae totam architecto et ea."
        ]
    ];

    return view('posts', [
        'title' => 'Post',
        'posts' => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    return view(
        'subPost',
        [
            'title' => 'Single Post'
        ]
    );
});
