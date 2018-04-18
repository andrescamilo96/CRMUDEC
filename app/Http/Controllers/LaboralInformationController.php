<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistorialLaboral;
use App\Http\Requests\infoLaboralRequest;
class LaboralInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $registros = HistorialLaboral::all();
        //dd($registros);
        return view('infolaboral.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infolaboral.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(infoLaboralRequest $request)
    {
         //return $request->all(); 
        HistorialLaboral::create($request->all()); 
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
         $registro = HistorialLaboral::findOrFail($id);
        return view('infolaboral.show',compact('registro'));
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

        $registro = HistorialLaboral::findOrFail($id);
        //dd($registro);
        return view('infolaboral.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(infoLaboralRequest $request, $id)
    {
        //
        //Actualizamos
        $registro = HistorialLaboral::findOrFail($id)->update($request->all());
        
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
        $registro = HistorialLaboral::findOrFail($id)->delete();
        return redirect()-> route('infolaboral.index');
    }
}
