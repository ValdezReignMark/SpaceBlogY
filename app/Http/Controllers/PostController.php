<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
  

    public function index()
    {
        $posts = Post::all();
        return $posts;
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
}