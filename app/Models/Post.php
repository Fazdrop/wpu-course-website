<?php

namespace App\Models;

use Illuminate\Support\Arr;



class Post{
    public static function all()
    {
        return [
        [
            'id'=> 1,
            'slug'=> 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Muhammad Fairuz Suhendi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt a commodi kira kira apa aja porro eius reprehenderit harum, excepturi magni velit quae dignissimos! Beatae vero tempore, perspiciatis apa aja facere temporibus.',
        ],
        [
            'id'=> 2,
            'slug'=> 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Muhammad Fairuz Suhendi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt a commodi, inventore maiores nobis porro eius reprehenderit.'
        ]
    ];
    }

    public static function find($slug)
    {
    //     return Arr::first(static::all(), function ($post) use ($slug) {
    //     return $post['slug'] == $slug;
    // });

    return Arr::first(static::all(), fn($post)=> $post['slug'] == $slug)?? abort(404, 'Post Not Found');
    }
}
