<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  

    public function index()
    {
        $posts = Post::all();
        return $posts;
    }
    
    public function showpost()
    {
        $showpost = Post::all();
        return $showpost;
    }

  
    public function store(Request $request)
    {
    
        $posts = new Post();
        $posts-> user_name = $request->user_name;
        $posts-> title = $request->title;
        $posts-> body = $request->body;
        $posts-> save();
        return $posts;
       
    }



    public function edit ($id)
    {
        $posts = Post::find($id);
        return $posts;
    }




    public function update(Request $request, $id)
    {
        
        $posts = Post::find($id);
        $posts-> user_name = $request->user_name;
        $posts-> title = $request->title;
        $posts-> body = $request->body;
        $posts-> save();
        return $posts;


    }
    public function delete(Request $request, $id)
    {   
     
        $posts = Post::find($id);
        $posts->delete();
        return $posts;
        
    }
    public function destroy(Request $request, $id)
    {   
     
        $name = Auth::find($id);
        $post = Post::where('user_name', $name)->get();
        $post->delete();
        return $post;
        
    }

}