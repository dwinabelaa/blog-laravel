<?php

namespace App\Models;

class Post
{
    private static $blog = [
        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dwi Nabela",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio ratione harum itaque at autem maiores cupiditate quo, voluptate, dicta in ad! Fugit itaque minima amet. Expedita, facilis similique unde earum explicabo animi eius omnis nemo? Ad provident in unde, nobis eveniet cumque repudiandae enim aperiam rerum omnis ipsa culpa illum quos minima debitis illo cum autem eaque suscipit iure fugit, quibusdam, possimus iusto dignissimos? Ipsum debitis ex expedita rem perferendis. Voluptas ducimus quos aliquid nihil natus facilis vel? Ullam neque reiciendis blanditiis voluptatem dolore labore atque vero praesentium iste corporis!"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dwi Nabela",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio ratione harum itaque at autem maiores cupiditate quo, voluptate, dicta in ad! Fugit itaque minima amet. Expedita, facilis similique unde earum explicabo animi eius omnis nemo? Ad provident in unde, nobis eveniet cumque repudiandae enim aperiam rerum omnis ipsa culpa illum quos minima debitis illo cum autem eaque suscipit iure fugit, quibusdam, possimus iusto dignissimos? Ipsum debitis ex expedita rem perferendis. Voluptas ducimus quos aliquid nihil natus facilis vel? Ullam neque reiciendis blanditiis voluptatem dolore labore atque vero praesentium iste corporis!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
