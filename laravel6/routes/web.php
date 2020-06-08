<?php

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
    return view('welcome');
});

Route::get('/about', function () {
    $article = App\Article::all();
    return view('about',[
        'articles'=> App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles/{article}', 'ArticlesController@show');

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('test',function(){
//     $name=request('name');
//     // return view('test',[

//     //     'name'=>$name
//     // ]);
//     return view('test',[

//         'name'=>request('name')
//     ]);
// });

// Route::get('/posts/{post}',function($post){
//     $posts = [
//         'my-first-post'=>'Hello, this is my first',
//         'my-secondt-post'=>'Hello, this is my second'
//     ];

//     if(! array_key_exists($post, $posts)){
//         abort(404, 'Sorry');
//     }

//     return view('post',[
//         'post'=>$posts[$post] ?? 'nothing here'
//     ]);
// });


Route::get('/posts/{post}', 'PostsController@show');