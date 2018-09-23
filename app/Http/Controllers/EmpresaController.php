<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\infoPersonalEmpresaRequest;
use App\informacionempresa;
use App\ciudad;
use App\user;
class EmpresaController extends Controller
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
            'roles:empresa',
            

        ]);

      
    }
    public function index()
    {
         $iduser = Auth::id();
         $ciudades = ciudad::all();
        $registros = informacionempresa::where('usuario_id','=',$iduser)->get(); 
         
        
        if ($registros->count()==0){
            return view('empresa.create',compact('ciudades'));
            
        }
        else if($registros->count() > 0){
            return view('indexempresa.index',compact('registros'));            
            
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
        $registro = informacionempresa::findOrFail($id);
        $ciudades = ciudad::all();
        //dd($registro);
        return view('indexempresa.edit',compact('registro','ciudades'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(infoPersonalEmpresaRequest $request, $id)
    {
        $registro = informacionempresa::findOrFail($id)->update($request->all());
        
        //Redireccionar
        flashy()->success('Informacion Actualizada Exitosamente', '');  
        return redirect()->route('indexempresa.index');
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
