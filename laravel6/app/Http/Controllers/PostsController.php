<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($post)
    {
        $posts = [
            'my-first-post'=>'Hello, this is my first',
            'my-secondt-post'=>'Hello, this is my second'
        ];

        if(! array_key_exists($post, $posts)){
            abort(404, 'Sorry');
        }

        return view('post',[
            'post'=>$posts[$post] ?? 'nothing here'
        ]);
    }
}