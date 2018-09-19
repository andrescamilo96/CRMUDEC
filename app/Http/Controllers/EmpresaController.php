<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\informacionempresa;
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

        $registros = informacionempresa::where('usuario_id','=',$iduser)->get(); 
         
        
        if ($registros->count()==0){
            return view('empresa.create');
            
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
        //dd($registro);
        return view('indexempresa.edit',compact('registro'));
        
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
        $registro = informacionempresa::findOrFail($id)->update($request->all());
        
        //Redireccionar
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
