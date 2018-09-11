<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudad;

class CiudadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ciudades = Ciudad::all();
        return view('ciudades.index',compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ciudades.create');
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

        Ciudad::create($request->all());
        $ciudades = Ciudad::all();
        flashy()->success('Ciudad creada exitosamente', '');
        //flash('Ciudad creada exitosamente!')->success();
        //return view('ciudades.index',compact('ciudades'));
         return redirect()->route('ciudades.index',compact('ciudades'));
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
          $registro = Ciudad::findOrFail($id);
        //dd($registro);

        return view('ciudades.edit',compact('registro'));
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
        $registro = Ciudad::findOrFail($id)->update($request->all());
         flashy()->success('Ciudad actualizada con exito', '');
         return redirect()->route('ciudades.index');
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
        $registro = Ciudad::findOrFail($id)->delete();
        flashy()->success('Ciudad eliminada exitosamente', '');
        return redirect()-> route('ciudades.index');
    }
}
