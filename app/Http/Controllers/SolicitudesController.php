<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\solicitud;
use DB;
use Mail;
use App\user;
use App\post;
use App\Http\Requests\solicitudesRequest;
use App\Http\Requests\solicitudrespuestarequest;
use App\Notifications\SolicitudSent;
use Illuminate\Support\Facades\Auth;
use App\informacionempresa;

class SolicitudesController extends Controller
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
        $ind = 0;

/*        $registro = db::table('solicitudes')->where('indrespuesta', $ind)->first();
*/      $registro = solicitud::where('indrespuesta','=',0)->get();
        
       
         return view('solicitudes.index',compact('registro'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          if(Auth::user()->hasRoles(['graduado']))
        {

            return view('solicitudes.create');
        }
        if(Auth::user()->hasRoles(['empresa']))
        {
            $iduser = Auth::id();

            $registros = informacionempresa::where('usuario_id','=',$iduser)->get(); 
            
            return view('solicitudes.createempresa',compact('registros'));
        }
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(solicitudesRequest $request)
    {
        //return $request->all();
        $Posts = post::latest()->take(4)->get();
        //dd($Post);


        /*$Post = Post::select("posts.*")->whereBetween('created', ['2018-02-01', '2018-02-10'])->get();*/
        
        solicitud::create($request->all()); 

        if(Auth::user()->hasRoles(['empresa']))
        {
             $iduser = Auth::id();

            $registros = informacionempresa::where('usuario_id','=',$iduser)->get();
           // return view('indexempresa.index',compact('registros'));
             flashy()->success('Informacion Enviada Exitosamente', '');  
             return redirect()->route('solicitudes.create',compact('registros'));
        }
        if(Auth::user()->hasRoles(['graduado']))
        {
            flashy()->success('Informacion Enviada Exitosamente', '');  
            //return view('home.home',compact('Posts'));
            return redirect()->route('solicitudes.create',compact('Posts'));
            
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

         $registro = solicitud::findorfail($id);
         if(Auth::user()->hasRoles(['empresa']))
        {
                return view('solicitudes.showEmpresa',compact('registro'));
        }
        if(Auth::user()->hasRoles(['graduado']))
        {
            return view('solicitudes.show',compact('registro'));
        }
        
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
          $registro = solicitud::findOrFail($id);
        //dd($registro);

        return view('solicitudes.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(solicitudrespuestarequest $request, $id)
    {
         //
        //Actualizamos
       
        $registro = solicitud::findOrFail($id)->update($request->all());

        $registro = solicitud::findOrFail($id);
        //Redireccionar

        $recipient = user::find($request->usuario_id);

        $recipient->notify(new SolicitudSent($registro) );
       
         /* Mail::Send('Emails.sendsolicitud',['msg'=> $registro], function($message) use($registro){
            $message->to($registro->correo,$registro->usuario->name)->subject('MensajeCRMUDEC Faca--- No Reply');

        });*/
        ///////ENVIAR EMAIL///////////////////
        flashy()->success('Tu mensaje ha sido enviado', '');
         return redirect()->route('solicitudes.index');
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
    }
}
