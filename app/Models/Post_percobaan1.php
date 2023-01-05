<?php

namespace App\Models;


class Post 
{
   private static $blog_posting =[ [
        "judul" => "Judul Pertama",
        "slug"=> "judul-pertama",
        "author" => "Hermanto Prastyawan", 
        "body" =>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Perferendis laudantium ipsum in non corporis suscipit pariatur eligendi aut mollitia placeat, 
        dolore dolores architecto sed autem? Quia obcaecati repudiandae molestiae, 
        provident officiis odit nisi, 
        explicabo vitae praesentium tenetur dignissimos veritatis nostrum eveniet sequi fugit fugiat veniam dolor repellendus. 
        Corrupti quo at delectus fugit culpa dignissimos tempora labore! Vitae non ad delectus, 
        ab maxime earum doloremque placeat voluptas magnam quos magni nihil tempore incidunt fugiat sit iste dolores hic eaque suscipit neque?"
    ],
    [
        "judul" => "Judul Kedua",
        "slug"=> "judul-kedua",
        "author" => "Cristiano Ronaldo", 
        "body" =>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Perferendis laudantium ipsum in non corporis suscipit pariatur eligendi aut mollitia placeat, 
        dolore dolores architecto sed autem? Quia obcaecati repudiandae molestiae, 
        provident officiis odit nisi, 
        explicabo vitae praesentium tenetur dignissimos veritatis nostrum eveniet sequi fugit fugiat veniam dolor repellendus. 
        Corrupti quo at delectus fugit culpa dignissimos tempora labore! Vitae non ad delectus, 
        ab maxime earum doloremque placeat voluptas magnam quos magni nihil tempore incidunt fugiat sit iste dolores hic eaque suscipit neque?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores debitis officia laborum eius ipsam? 
        Perspiciatis quam cumque dignissimos quia autem. Reiciendis quasi provident laboriosam libero at quibusdam neque nulla consectetur!"
    ]
   ];
   
   public static function all()
   {
        return collect(self::$blog_posting);
   }

   public static function find($slug)
   {
        $post = static::all();
        return $post->firstWhere('slug',$slug);
   }
}