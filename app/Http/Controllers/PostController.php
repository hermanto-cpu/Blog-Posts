<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post',[
            "title" => "All Post",
            // "post" => Post::all()
            "post" => Post::latest()->get()
        ]);
    }

    public function display(Post $post)
    {       
    return view('posting',[
        "title" => "Single Post",
        "posting" => $post
    ]);
    }
}
