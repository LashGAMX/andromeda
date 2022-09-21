<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog()
    {
        $model = Post::where('status','PUBLISHED')->orderBy('id','desc')->get();
        $post = Post::where('status','PUBLISHED')->orderBy('id','desc')->limit(3)->get();
        $data = array(
            'post' => $post,
            'model' => $model,
        );
        return redirect('mantenimiento');
        // return view('blog.blog',$data);
    }
    public function blogTemp()
    {
        $model = Post::where('status','PUBLISHED')->orderBy('id','desc')->get();
        $post = Post::where('status','PUBLISHED')->orderBy('id','desc')->limit(3)->get();
        $data = array(
            'post' => $post,
            'model' => $model,
        );
        // return redirect('mantenimiento');
        return view('blog.blog',$data);
    }
    public function show($id)
    {
        $model = Post::find($id);
        $post = Post::where('status','PUBLISHED')->orderBy('id','desc')->limit(3)->get();
        $data = array(
            'post' => $post,
            'model' => $model,
        );
        return view('blog.show',$data);
    }
}
