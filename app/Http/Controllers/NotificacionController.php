<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DataBaseNotification; 
class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {
        //
     
        return view('notificaciones.index',[

            'unreadNotifications' => auth()->user()->unreadNotifications,
            'readNotifications' => auth()->user()->readNotifications

        ]);

    }
   
    public function read($id)
    {
        //dd($id);
         DataBaseNotification::find($id)->markAsRead();
        flashy()->success('Notificacion Marcada Como leida', ''); 
        return redirect()->route('notificaciones.index');
         
    }
    public function destroy($id)
    {
        //
        DataBaseNotification::find($id)->delete();
        flashy()->success('Notificacion Eliminada con exito', ''); 
        return redirect()->route('notificaciones.index');
       
    }
}
