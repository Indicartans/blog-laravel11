<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});


Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->get();

    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);
    // dd($post);
    return view('post', ['title' => $post->title, 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $post = Post::find($slug);
    // dd($post);
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $post = Post::find($slug);
    // dd($post);

    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => count($category->posts) . ' Articles in ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
