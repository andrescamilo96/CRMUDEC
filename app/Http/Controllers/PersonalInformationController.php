<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InFormacionGraduado; 
use App\Ciudad; 
use App\Http\Requests\infoPersonalRequest;
use Illuminate\Support\Facades\Auth;
class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iduser = Auth::id();
        $registros = InFormacionGraduado::where('user_id','=',$iduser)->get();
        $ciudades = Ciudad::all();
        if(count($registros)==0){
            return view('infoPersonal.create',compact('registros','ciudades'));    
        }
        return view('infoPersonal.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ciudades = Ciudad::all();
        
        return view('infoPersonal.create',compact('ciudades')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(infoPersonalRequest $request)
    {
        // return $request->all(); 
        InFormacionGraduado::create($request->all()); 
        return view('/home'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = InFormacionGraduado::findOrFail($id);
        $ciudades = Ciudad::all();
        //dd($registro);
        return view('infoPersonal.edit',compact('registro','ciudades'));
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
        $registro = InFormacionGraduado::findOrFail($id)->update($request->all());
        
        //Redireccionar
        return redirect()->route('infopersonal.index');
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
