<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\infoPersonalEmpresaRequest;
use Illuminate\Support\Facades\Auth;
use App\InformacionEmpresa;
use App\User;
use App\Notifications\AprobacionEmpresaSent;
use App\Notifications\DesAprobacionEmpresaSent;
class InformacionPersonalEmpresaController extends Controller
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
            'roles:empresa,admin',
            

        ]);

      
    }
    public function index()
    {
         
        $registro = InformacionEmpresa::where('validadorempresa','=',0)->get();
        
        if(Auth::user()->hasRoles(['empresa']))
        {
             $iduser = Auth::id();

            $registros = InformacionEmpresa::where('usuario_id','=',$iduser)->get();
            return view('indexempresa.index',compact('registros'));
        }
         if(Auth::user()->hasRoles(['admin']))
        {
             return view('empresa.index',compact('registro'));
        }
       
         
        /*return view('indexempresa.index');*/
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
        $iduser = Auth::id();

        $registros = InformacionEmpresa::where('usuario_id','=',$iduser)->get(); 
        //return view('indexempresa.index',compact('registros'));
        return redirect()->route('indexempresa.index',compact('registros'));
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

        $registro = InformacionEmpresa::findOrFail($id);
        $recipient = User::find($request->usuario_id);
        $recipient->notify(new AprobacionEmpresaSent($registro) );
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
       

        $registro = InformacionEmpresa::findOrFail($id);
        
        $recipient = User::find($registro->usuario_id);
        //dd($recipient);
        $recipient->notify(new DesAprobacionEmpresaSent($registro) );
        InformacionEmpresa::findOrFail($id)->delete();
        flashy()->success('Registro eliminado exitosamente', '');
        return redirect()->route('empresa.index');
    }
}
