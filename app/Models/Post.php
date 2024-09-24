<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
                [
                    'id' => 1,
                    'slug' => 'judul-artikel-1',
                    'title' => 'Judul Artikel 1',
                    'author' => 'Zefanya Silalahi',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab beatae, 
                    debitis eum blanditiis earum doloribus numquam eveniet, 
                    distinctio tenetur iure explicabo fuga error, 
                    exercitationem aut vel tempore officiis odit nulla.'
                ],
                [
                    'id' => 2,
                    'slug' => 'judul-artikel-2',
                    'title' => 'Judul Artikel 2',
                    'author' => 'Zefanya Silalahi',
                    'body' => ' Lorem ipsum dolor sit amet consectetur, 
                    adipisicing elit. Culpa pariatur veniam, 
                    atque quaerat dolorem ab! Temporibus quasi adipisci 
                    a qui maxime ab omnis aliquid veritatis! 
                    Fuga impedit quia vitae at?'
                ]
            ];
    }

    public static function find($slug)
    {
        $post = Arr::first(static::all(), function ($post) use ($slug){
            return $post['slug'] == $slug;
        });

        if(! $post)
        {
            abort(404);
        }
        else
        {
            return $post;
        }
    }
}
