<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Muhammad Ardiansyah Hermawan",
        "email" => "asw@gmail.com",
        "image" => "dataku.jpg"
    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('/posts/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single Post",
        "posts" => Post::find($slug)
    ]);
});
