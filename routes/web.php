<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => '1',
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'Alfa Indica',
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, dolores iste
                        molestias sint rerum, sapiente dolor ducimus non minus, quam corporis sequi quasi velit. Nesciunt
                        maxime perferendis aut hic veniam?"
            ],
            [
                'id' => '2',
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'Alfa Indica',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum
                    consequuntur iste ullam fugit delectus fugiat! Tenetur doloribus alias consequuntur iusto, nemo non
                    velit ad aliquam repellendus dolorem quas quos suscipit.'
            ]
        ]

    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Alfa Indica',
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, dolores iste
                        molestias sint rerum, sapiente dolor ducimus non minus, quam corporis sequi quasi velit. Nesciunt
                        maxime perferendis aut hic veniam?"
        ],
        [
            'id' => '2',
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Alfa Indica',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum
                    consequuntur iste ullam fugit delectus fugiat! Tenetur doloribus alias consequuntur iusto, nemo non
                    velit ad aliquam repellendus dolorem quas quos suscipit.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    // dd($post);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
