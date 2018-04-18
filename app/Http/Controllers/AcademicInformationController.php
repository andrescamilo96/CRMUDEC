<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroEstudiantil;
use App\Http\Requests\infoEstudiantilRequest;

class AcademicInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registros = RegistroEstudiantil::all();
        return view('infoacademica.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infoacademica.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(infoEstudiantilRequest $request)
    {
        //
        RegistroEstudiantil::create($request->all());
        //return $request->all();
         return redirect()->route('infoacademica.index');
        
        /*return $request ->input("nombre");Acceder a un campo especifico*/

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
         $registro = RegistroEstudiantil::findOrFail($id);
        return view('infoacademica.show',compact('registro'));
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
        $registro = RegistroEstudiantil::findOrFail($id);
        return view('infoacademica.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(infoEstudiantilRequest $request, $id)
    {
        //Actualizamos
        $registro = RegistroEstudiantil::findOrFail($id)->update($request->all());
        
        //Redireccionar
        return redirect()->route('infoacademica.index');
        
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
         $registro = RegistroEstudiantil::findOrFail($id)->delete();
        return redirect()-> route('infoacademica.index');
    }
}
