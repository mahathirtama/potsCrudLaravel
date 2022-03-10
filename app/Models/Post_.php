<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Mahathirtama Ahmad",
            "body" => "
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nam ea, rem enim facilis eos in eveniet architecto incidunt, autem expedita ipsa, eaque iure beatae harum vero illo consectetur sit aliquam. Laborum possimus odio quas aliquam facilis suscipit id? Molestiae suscipit voluptas, repellendus odit quaerat autem nulla dicta velit unde aliquam rem asperiores! Vel ab perferendis nostrum porro obcaecati excepturi provident dicta mollitia fugit quos nam quod libero quisquam ipsa, animi eligendi quas. Quae porro sunt recusandae ut, dolorem explicabo adipisci minus officiis excepturi sed corporis facere deserunt pariatur, accusamus ex unde reprehenderit consequatur. Totam nesciunt omnis dolorum possimus inventore!"
        ],
        [
            "tittle" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Mahendradatta Ahmad",
            "body" => "
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nam ea, rem enim facilis eos in eveniet architecto incidunt, autem expedita ipsa, eaque iure beatae harum vero illo consectetur sit aliquam. Laborum possimus odio quas aliquam facilis suscipit id?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
