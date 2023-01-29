<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dwi Nabela",
        "email" => "dwinabela0910@gmail.com",
        "image" => "img/foto.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    foreach ($blog_posts as $item) {
        if ($item['slug'] === $slug) {
            $new_post = $item;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "item" => $new_post
    ]);
});
