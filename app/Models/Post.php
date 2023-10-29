<?php

namespace App\Models;

class Post
{

    private static $blog_posts = [
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

    public static function getAll()
    {
        return collect(self::$blog_posts);
    }

    public static function getPost($slug)
    {
        $posts = static::getAll();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
