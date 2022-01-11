<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post2;

class PostController2 extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function createPost(Request $request){
        $post = new Post2();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created','Post has been created successfully');
    }

    public function getPost(){
        $post = Post2::orderBy('id','DESC')->get();
        return view('posts',compact('post'));
    }

    public function getPostById($id){
        $post = Post2::where('id',$id)->first();
        return view('single-post',compact('post'));
    }
}
