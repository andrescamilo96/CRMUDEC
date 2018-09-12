<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoestudio;
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
        $tipoestudios = tipoestudio::all();
        return view('tipoestudios.index',compact('tipoestudios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipoestudios.create');
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
         tipoestudio::create($request->all());
        $tipoestudios = tipoestudio::all();
        flashy()->success('Tipo de Estudio  creado exitosamente', '');
        return redirect()->route('tipoestudios.index',compact('tipoestudios'));
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
         $registro = tipoestudio::findOrFail($id);
        //dd($registro);

        return view('tipoestudios.edit',compact('registro'));
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
         $registro = tipoestudio::findOrFail($id)->update($request->all());
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
        $registro = tipoestudio::findOrFail($id)->delete();
        flashy()->success('Tipo estudio eliminado exitosamente', '');
        return redirect()-> route('tipoestudios.index');
    }
}
