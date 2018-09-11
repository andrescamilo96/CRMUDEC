<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoEstudio;
class TipoEstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoestudios = TipoEstudio::all();
        return view('TipoEstudios.index',compact('tipoestudios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('TipoEstudios.create');
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
         TipoEstudio::create($request->all());
        $tipoestudios = TipoEstudio::all();
        flashy()->success('Tipo de Estudio  creado exitosamente', '');
        return redirect()->route('TipoEstudios.index',compact('tipoestudios'));
        //return view('TipoEstudios.index',compact('tipoestudios'));
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
         $registro = TipoEstudio::findOrFail($id);
        //dd($registro);

        return view('TipoEstudios.edit',compact('registro'));
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
         $registro = TipoEstudio::findOrFail($id)->update($request->all());
         flashy()->success('Tipo Estudio actualizado con exito', '');
         return redirect()->route('tipoestudios.index');
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
        $registro = TipoEstudio::findOrFail($id)->delete();
        flashy()->success('Tipo estudio eliminado exitosamente', '');
        return redirect()-> route('tipoestudios.index');
    }
}
