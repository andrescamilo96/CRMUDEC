<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registroestudiantil;
use App\Http\Requests\infoEstudiantilRequest;
use App\Http\Requests\editinfoacademicarequest;
use Illuminate\Support\Facades\Auth;
use App\tipoestudio;
use Illuminate\Support\Facades\Storage;

class AcademicInformationController extends Controller
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
            'roles:graduado'

        ]);

      
    }
    public function index()
    {
        $iduser = Auth::id();

        $registros = registroestudiantil::where('usuario_id','=',$iduser)->get(); ;
        return view('infoacademica.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $programas = tipoestudio::all();
        return view('infoacademica.create',['programas'=>$programas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(infoEstudiantilRequest $request)
    {
        
        //dd($request->all());
        $registro = (new registroestudiantil)->fill($request->all());
        /*RegistroEstudiantil::create($request->all());*/
        $usuario=$request->input('usuario_id');
        if($request->hasFile('adjuntosoporte'))
        {
            $registro->adjuntosoporte = $request->file('adjuntosoporte')->store(''.$usuario.'/academico/soporte');      
        }
        if($request->hasFile('certificadoconvalidacion'))
        {
            $registro->certificadoconvalidacion = $request->file('certificadoconvalidacion')->store(''.$usuario.'/academico/convalidacion');
        }   
        
        $registro->save();
         flashy()->success('Informacion Guardada Exitosamente', '');        
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
         $registro = registroestudiantil::findOrFail($id);
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
        $registro = registroestudiantil::findOrFail($id);
        return view('infoacademica.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(editinfoacademicarequest $request, $id)
    {
        //Actualizamos
        
        $registro = registroestudiantil::findOrFail($id);
        $usuario=$request->input('usuario_id');
        
        $registro->fill($request->all());
        if($request->hasFile('adjuntosoporte'))
        {
            $archivo=$registro->adjuntosoporte;
            
            Storage::delete($archivo);
            $registro->adjuntosoporte = $request->file('adjuntosoporte')->store(''.$usuario.'/academico/soporte');      
        }
        if($request->hasFile('certificadoconvalidacion'))
        {
            $archivo=$registro->certificadoconvalidacion;
            
            Storage::delete($archivo);
            $registro->certificadoconvalidacion = $request->file('certificadoconvalidacion')->store(''.$usuario.'/academico/convalidacion');
        }   
        $registro->save();
        flashy()->success('Informacion Actualizada Exitosamente', '');  
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
         $registro = registroestudiantil::findOrFail($id)->delete();
         flashy()->success('Informacion Borrada Exitosamente', '');           
        return redirect()-> route('infoacademica.index');
    }
}
