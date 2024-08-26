<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Insightful Ink Artikel'], ['title' => 'About']);
});

Route::get('/posts', function () {

    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);
    // $posts = Post::latest()->get(); untuk mengambil data paling baru

    // Eager Loading
    // $posts = Post::with('author')->latest()->get(); 
    // $posts = Post::with(['author', 'category'])->latest()->get(); 

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // // Lazy Eager Loading //
    // $posts = $user->posts->load('category', 'author');
    
    // return view('posts', ['title' => count($posts). ' Articles by ' . $user->name, 'posts' => $posts]);
    
    return view('posts', ['title' => count($user->posts). ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // // Lazy Eager Loading
    // $posts = $category->posts->load('category', 'author');
    
    // return view('posts', ['title' => ' Articles In ' . $category->name, 'posts' => $posts]);

    return view('posts', ['title' => ' Articles In ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
