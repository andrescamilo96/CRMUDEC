<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification; 
use Illuminate\Support\Facades\Auth;
use App\informacionempresa;
class NotificacionController extends Controller
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
            'roles:admin,empresa,graduado'

        ]);

      
    }

    public function index()
    {
        //
        if(Auth::user()->hasRoles(['graduado']))
        {
             return view('notificaciones.index',[

            'unreadNotifications' => auth()->user()->unreadNotifications,
            'readNotifications' => auth()->user()->readNotifications

            ]);
        }
         if(Auth::user()->hasRoles(['empresa']))
        {
             $iduser = Auth::id();

            $registros = informacionempresa::where('usuario_id','=',$iduser)->get(); 
             return view('notificaciones.indexEmpresa',compact('registros'),[

            'unreadNotifications' => auth()->user()->unreadNotifications,
            'readNotifications' => auth()->user()->readNotifications
            

            ]);
        }
       

    }
   
    public function read($id)
    {
        //dd($id);
         DatabaseNotification::find($id)->markAsRead();
        flashy()->success('Notificacion Marcada Como leida', ''); 
        return redirect()->route('notificaciones.index');
         
    }
    public function destroy($id)
    {
        //
        DatabaseNotification::find($id)->delete();
        flashy()->success('Notificacion Eliminada con exito', ''); 
        return redirect()->route('notificaciones.index');
       
    }
}
