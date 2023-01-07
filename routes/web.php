<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Hermanto Prastyawan",
        "email" => "hermanto9pras@gmail.com",
        "image" =>"IMG_7544.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index'] );

//halaman single post
Route::get('post/{post:slug}', [PostController::class, 'display']);

Route::get('/categories',function(){
    return view('categories', 
    [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('post', 
        [
            'title' => "Post By Category : $category->name",
            'post' => $category->posts->load('author', 'category'),
        ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('post', 
        [
            'title' => "Post By : $author->name",
            'post' => $author->post->load('category', 'author')
        ]);
});