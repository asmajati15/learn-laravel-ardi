<?php

namespace App\Models;

class post
{
    private static $blog_post = [
        [
            "title" => "The SHIT",
            "slug" => "the SHIT",
            "author" => "Audi Safira Firdausi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque doloremque iure inventore ullam ipsam! Sapiente consequatur est, necessitatibus eligendi error quibusdam eveniet facilis animi sint doloremque at, nemo vitae rerum dolorem dignissimos maiores nesciunt iure quia? 
            Unde mollitia maxime esse accusamus, odio, numquam ullam quisquam illo magni assumenda saepe et."
        ],

        [
            "title" => "The Buk",
            "slug" => "the Buk",
            "author" => "Muhammad Ardiansyah Hermawan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque doloremque iure inventore ullam ipsam! Sapiente consequatur est, necessitatibus eligendi error quibusdam eveniet facilis animi sint doloremque at, nemo vitae rerum dolorem dignissimos maiores nesciunt iure quia? 
            Unde mollitia maxime esse accusamus, odio, numquam ullam quisquam illo magni assumenda saepe et."
        ],

    ];

    public static function all()
    {
        return self::$blog_post;
    }

    public static function find($slug)
    {
        $posts = self::$blog_post;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
