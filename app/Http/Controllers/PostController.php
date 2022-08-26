<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(){
        
        $title = '';
        if(request('category')){
            $category = Category::firstwhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        if(request('author')){
            $author = User::firstwhere('username', request('author'));
            $title = ' in '. $author->name;
        }
        return view('posts',[
            
            "title" => "All Post".$title,
            "active" => "posts",
            "posts" =>$posts = Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Singel Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
