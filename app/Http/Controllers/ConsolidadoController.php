<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\InformacionGraduado;
use App\RegistroEstudiantil;
use App\HistorialLaboral;
use PDF;

class ConsolidadoController extends Controller
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
        $infopersonal = InformacionGraduado::where('user_id','=',$id)->get(); 
        $estudios = RegistroEstudiantil::where('usuario_id','=',$id)->get(); 
        $historialaboral = HistorialLaboral::where('usuario_id','=',$id)->get(); 
        /*return view('consolidado.show',compact('user'));*/
        return view('consolidado.show', [
            'infopersonal'=> $infopersonal,
            'estudios'=> $estudios,
            'historialaboral'=>$historialaboral, 
            ],compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

    }
    public function pdf($id){
        $user = User::findOrFail($id);
        $infopersonal = InformacionGraduado::where('user_id','=',$id)->get(); 
        $estudios = RegistroEstudiantil::where('usuario_id','=',$id)->get(); 
        $historialaboral = HistorialLaboral::where('usuario_id','=',$id)->get(); 
       
        $view = view ('consolidado.pdf',['infopersonal'=> $infopersonal, 'estudios'=> $estudios,'historialaboral'=>$historialaboral],compact('user'));
        $pdf=\App::make('dompdf.wrapper');
        $pdf = PDF::loadHTML($view);
        return $pdf->stream('consolidado.pdf');
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
    }
}
