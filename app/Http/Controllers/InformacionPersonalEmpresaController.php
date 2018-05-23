<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\infoPersonalEmpresaRequest;
use App\InformacionEmpresa;
use App\User;
class InformacionPersonalEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $registro = InformacionEmpresa::where('validadorempresa','=',0)->get();
        
        
        return view('empresa.index',compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        InformacionEmpresa::create($request->all()); 
        return view('empresa.index');
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
        $registro = InformacionEmpresa::findOrFail($id);
        //dd($registro);

        return view('Empresa.edit',compact('registro'));
        

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
        $registro = InformacionEmpresa::findOrFail($id)->update($request->all());
        flashy()->success('Empresa Validada con exito', '');
         return redirect()->route('empresa.index');
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
        InformacionEmpresa::findOrFail($id)->delete();

       
        flashy()->success('Registro eliminado exitosamente', '');
        return redirect()->route('empresa.index');
    }
}
