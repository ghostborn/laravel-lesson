<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello world';
});

//Route::get('/second', function () {
//    return view('second');
//});

Route::view('/second', 'second');

Route::get('/third', function () {
    return view('third');
});

Route::view('/', 'home')->name('home');

Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
});

//Route::get('user/{name}', function (?string $name = 'justin') {
//    return $name;
//});


Route::get('/number', function () {
    return [1, 2, 3];
});

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');


//Route::get('/', function () {
//    $categories = DB::table('categories')->get();
//    return view('home', ['categories' => $categories]);
//})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
