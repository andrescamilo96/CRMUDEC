<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InFormacionGraduado; 
use App\Ciudad; 
use App\ProgramaAcademico;
use App\Http\Requests\infoPersonalRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;
class PersonalInformationController extends Controller
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
        $registros = InFormacionGraduado::where('user_id','=',$iduser)->first();
        
        
        if(count($registros)==0){
            $ciudades = Ciudad::all();
            $programas = ProgramaAcademico::all();

            return view('infoPersonal.create',['ciudades'=>$ciudades,'programas'=>$programas],compact('registros'));    
        }
        if(count($registros)>0)
        {
            $ciudades = DB::table('ciudades')->where('id',$registros->ciudadresidencia_id)->first();     
            return view('infoPersonal.index',['ciudades'=>$ciudades],compact('registros'));    
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
        $Posts = Post::latest()->take(4)->get();
        return view('home.home',compact('Posts'));
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
    public function update(infoPersonalRequest $request, $id)
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
