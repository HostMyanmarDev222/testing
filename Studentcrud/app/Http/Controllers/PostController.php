<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPost()
    {
        $post = DB::table('post')->get();
        return view('posts',compact('post'));
    }

    public function addPost()
    {
        return view('add-post');
    }

    public function addPostSubmit(Request $request){
        DB::table('post')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_created','Post has been created successfully');
    }

    public function getPostById($id)
    {
        $post = DB::table('post')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    public function deletePost($id){
        DB::table('post')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully');
    }

    public function editPost($id){
        $post = DB::table('post')->where('id',$id)->first();
        return view('edit-post',compact('post'));
    }

    public function updatePost(Request $request){
        DB::table('post')->where('id',$request->id)->update([
            'title'=> $request->title,
            'body'=> $request->body
        ]);

        return back()->with('post_updated','Post has been updated successfully');
    }

    public function innerJoin(){
        $request = DB::table('user')
                    ->join('post','user.id','=','post.user_id')
                    ->select('user.name','post.title','post.body')
                    ->get();

        return $request;
    }

    public function leftJoin(){
        $request=DB::table('user')
                ->leftJoin('post','user.id','=','post.user_id')->get();

        return $request;
    }

    public function rightJoin(){
        $request=DB::table('user')
                ->rightJoin('post','user.id','=','post.user_id')->get();

        return $request;
    }

    public function getAllPostsUsingModel(){
        $posts = Post::all();
        return $posts;
    }

}
