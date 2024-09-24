<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
