<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\historiallaboral;
use App\ciudad;
use App\Http\Requests\infoLaboralRequest;
use App\Http\Requests\editinfolaboralrequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class LaboralInformationController extends Controller
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
            'roles:graduado'

        ]);

      
    }
    public function index()
    {
        //
        $iduser = Auth::id();
        $registros = historiallaboral::where('usuario_id','=',$iduser)->get(); 
        
        return view('infolaboral.index',compact('registros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = ciudad::all();
        return view('infolaboral.create',compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(infoLaboralRequest $request)
    {
        $registro = (new historiallaboral)->fill($request->all());
        $usuario=$request->input('usuario_id');
        if($request->hasFile('adjuntosoporte'))
        {
            $registro->adjuntosoporte = $request->file('adjuntosoporte')->store(''.$usuario.'/laboral/soporte');      
        }
         //return $request->all(); 
        /*HistorialLaboral::create($request->all()); */
        $registro->save();        
        return redirect()->route('infolaboral.index');
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
         $registro = historiallaboral::findOrFail($id);
         $ciudades = DB::table('ciudades')->where('id',$registro->ciudadempresa_id)->get();       
        return view('infolaboral.show',['ciudades'=>$ciudades],compact('registro'));
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

        $registro = historiallaboral::findOrFail($id);
        $ciudades = DB::table('ciudades')->where('id',$registro->ciudadempresa_id)->first();                 
        return view('infolaboral.edit',compact('registro','ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(editinfolaboralrequest $request, $id)
    {
        //
        //Actualizamos
        $registro = historiallaboral::findOrFail($id);
        $usuario=$request->input('usuario_id');
        $registro->fill($request->all());
        if($request->hasFile('adjuntosoporte'))
        {
            $archivo=$registro->adjuntosoporte;
            
            Storage::delete($archivo);
            $registro->adjuntosoporte = $request->file('adjuntosoporte')->store(''.$usuario.'/laboral/soporte');      
        }
        $registro->save();
        //Redireccionar
        return redirect()->route('infolaboral.index');
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
        $registro = historiallaboral::findOrFail($id)->delete();
        return redirect()-> route('infolaboral.index');
    }
}
