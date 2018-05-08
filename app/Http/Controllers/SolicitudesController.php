<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use DB;
use Mail;

use App\Http\Requests\solicitudesRequest;
class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ind = 0;

/*        $registro = db::table('solicitudes')->where('indrespuesta', $ind)->first();
*/      $registro = Solicitud::where('indrespuesta','=',0)->get();
        
       
         return view('solicitudes.index',compact('registro'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('solicitudes.create');
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
        Solicitud::create($request->all()); 
        return view('/home');
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
          $registro = Solicitud::findOrFail($id);
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
    public function update(Request $request, $id)
    {
         //
        //Actualizamos
        $registro = Solicitud::findOrFail($id)->update($request->all());

        $registro = Solicitud::findOrFail($id);
        //Redireccionar
        // dd($registro);
       
          Mail::Send('Emails.sendsolicitud',['msg'=> $registro], function($message) use($registro){
            $message->to($registro->correo,$registro->usuario->name)->subject('MensajeCRMUDEC Faca--- No Reply');

        });
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
