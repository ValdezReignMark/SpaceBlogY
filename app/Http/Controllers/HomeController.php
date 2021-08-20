<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;
// use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('/homeIndex');
        // $posts = Post::all();
        // return view('homeIndex');


    }
    public function logout()
    {

        Auth::logout();
        return view('auth.login');
        // $posts = Post::all();
        // return view('homeIndex');


    }


}
