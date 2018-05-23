<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         if(Auth::user()->hasRoles(['admin']))
        {

            return view('/indexAdmin.index');
        }

       //$Posts = Post::all(); 

        $Posts = Post::latest()->take(4)->get();
        //dd($Post);


        /*$Post = Post::select("posts.*")->whereBetween('created', ['2018-02-01', '2018-02-10'])->get();*/

        return view('home',compact('Posts'));
    }
}
