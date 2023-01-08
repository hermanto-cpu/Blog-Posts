<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('post',[
            "title" => "All Post" . $title,
            'active' => 'post', 
            // "post" => Post::all()
            "post" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function display(Post $post)
    {       
    return view('posting',[
        "title" => "Single Post",
        'active' => 'post',
        "posting" => $post
    ]);
    }
}
