<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   function __construct()
    {
       $this->middleware([

            'auth',
            'roles:graduado'

        ]);

      
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

            return view('/indexadmin.index');
        }

        if(Auth::user()->hasRoles(['graduado'])){
             $Posts = post::latest()->take(4)->get();
             return view('/home.home',compact('Posts'));
        }

        
           
        
       //$Posts = Post::all(); 

       
        //dd($Post);


        /*$Post = Post::select("posts.*")->whereBetween('created', ['2018-02-01', '2018-02-10'])->get();*/

        
    }
    
}
