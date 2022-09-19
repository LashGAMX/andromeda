<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog()
    {
        $model = Post::all();
        $post = Post::where('deleted_at','null')->limit(3)->get();
        $data = array(
            'post' => $post,
            'model' => $model,
        );
        return view('blog.blog',$data);
    }
    public function show($id)
    {
        $model = Post::find($id);
        $post = Post::where('deleted_at','null')->limit(3)->get();
        $data = array(
            'post' => $post,
            'model' => $model,
        );
        return view('blog.show',$data);
    }
}
