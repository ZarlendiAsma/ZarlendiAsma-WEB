<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "body" =>  "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque sed eos illum mollitia recusandae maiores maxime esse, veniam ullam possimus quae itaque ipsa eaque ad, numquam facere reiciendis dicta voluptas soluta quas? Ipsa aliquid obcaecati voluptatibus ullam. Corporis inventore et nisi optio! Qui nisi a consequuntur est, vero eius rerum ipsam quaerat, sed quia error aliquam debitis reprehenderit illo, corporis recusandae dolorem excepturi dignissimos natus? Accusamus accusantium, libero quam tenetur qui, inventore doloribus dolore quas, nisi quo tempore nam eveniet!"
            ],
            [
                    "title" => "Judul Post Kedua",
                    "slug" => "judul-post-kedua",
                    "body" =>  "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque sed eos illum mollitia recusandae maiores maxime esse, veniam ullam possimus quae itaque ipsa eaque ad, numquam facere reiciendis dicta voluptas soluta quas? Ipsa aliquid obcaecati voluptatibus ullam. Corporis inventore et nisi optio! Qui nisi a consequuntur est, vero eius rerum ipsam quaerat, sed quia error aliquam debitis reprehenderit illo, corporis recusandae dolorem excepturi dignissimos natus? Accusamus accusantium, libero quam tenetur qui, inventore doloribus dolore quas, nisi quo tempore nam eveniet!"
                ],
        ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
    $posts = static::all();
    
    //     $post = [];
    //     foreach($posts as $p) {
    //         if($p["slug"] === $slug) {
    //             $post = $p;
    //         }
    //     }
    
        return $posts->firstWhere('slug', $slug);
    }
}