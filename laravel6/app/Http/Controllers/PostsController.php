<?php

namespace App\Http\Controllers;
use DB;
use App\Post;

class PostsController
{
    public function show($slug)
    {
        // $posts = [å
        //     'my-first-post'=>'Hello, this is my first',
        //     'my-secondt-post'=>'Hello, this is my second'
        // ];

        // $posts=DB::table('posts')->where('slug', $slug)->first();
        $posts=Post::where('slug', $slug)->firstOrFail();
        // dd($posts);

        // if(! array_key_exists($post, $posts)){
        //     abort(404, 'Sorry');
        // }
  

        return view('post',[
            'post'=>$posts
        ]);
    }
}