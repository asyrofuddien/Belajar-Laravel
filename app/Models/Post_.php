<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Pengembala Perkasa",
            "slug" => "pengembala-perkasa",
            "author" => "Muhammad Uddien",
            "body" => "     Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, iusto qui blanditiis sed optio voluptatibus eveniet quas ducimus eaque provident ea esse dignissimos! Nam temporibus, corrupti eveniet mollitia fugiat officiis laboriosam et? Est repudiandae aspernatur officiis? Est enim recusandae maxime quod molestias? Non eius, rem earum placeat voluptatum numquam rerum mollitia debitis ducimus perferendis, corporis quam reprehenderit, harum ab possimus? Doloremque tempora omnis earum, fugit fugiat consequatur corrupti, similique modi reiciendis veniam, pariatur deleniti aperiam? Quae doloribus ducimus voluptate recusandae! "
        ],
        [
            "title" => "Pengembala Perkasa dua",
            "slug" => "pengembala-perkasa-dua",
            "author" => "Asyrofuddien",
            "body" => "  Lorem ipsum dolor sit amet consectetur   Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, iusto qui blanditiis sed optio voluptatibus eveniet quas ducimus eaque provident ea esse dignissimos! Nam temporibus, corrupti eveniet mollitia fugiat officiis laboriosam et? Est repudiandae aspernatur officiis? Est enim recusandae maxime quod molestias? Non eius, rem earum placeat voluptatum numquam rerum mollitia debitis ducimus perferendis, corporis quam reprehenderit, harum ab possimus? Doloremque tempora omnis earum, fugit fugiat consequatur corrupti, similique modi reiciendis veniam, pariatur deleniti aperiam? Quae doloribus ducimus voluptate recusandae! "
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){

        $posts = static::all();
    //     $post = [];
    //     foreach($posts as $p){
    //     if($p["slug"]=== $slug){
    //          $post = $p;
    //      }
    // }
    return $posts->firstwhere('slug',$slug);
    }
    

}

