<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\UserNotification;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      function __construct()
    {
       $this->middleware([

            'auth',
            'roles:admin,empresa'

        ]);

      
    }
    public function index()
    {
        //
        $users = User::where('role_id','=',3)->get(); 
        if(Auth::user()->hasRoles(['empresa']))
        {            
            return view('users.indexEmpresa',compact('users')); 
        }
        if(Auth::user()->hasRoles(['admin']))
        {
            return view('users.index',compact('users'));    
        }
         
         
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = User::findOrFail($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::findOrFail($id)->delete();
        flashy()->success('Registro eliminado exitosamente', '');
        return redirect()->route('empresa.index');
    }

    public function Notificar($id)
    {
        $registro = User::findOrFail($id);
        //Redireccionar
        
        $recipient = User::find($registro->id);

        $recipient->notify(new UserNotification($registro) );
       $users = User::where('role_id','=',3)->get();
        flashy()->success('Graduado Notificado con exito', '');
       return view('users.index',compact('users')); 
    }
}
