<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\solicitud;
use \App\post;
use \App\user;
use \App\ciudad;
use App\informacionempresa;
use App\tipoestudio;

class IndexController extends Controller
{
    //
    public function index(){

    	if(Auth::guest()){

			return view('index/index');
    	}
		else
		 {


         	if(Auth::user()->hasRoles(['admin']))
        	{

		        $Solicitudes =  solicitud::where('indrespuesta','=',0)->get();
		        $Posts =  post::all();
		        $InfoEmpresa = informacionempresa::where('validadorempresa','=',0)->get();
		        $userGraduado = user::where('role_id','=',3)->get();
		        $Ciudad = ciudad::all();
		        $TipoEstudios = tipoestudio::all();
		        return view('indexadmin.index',[
		            'Solicitudes' =>$Solicitudes,
		            'Posts' =>$Posts,
		            'InfoEmpresa' => $InfoEmpresa,
		            'userGraduado' => $userGraduado,
		            'Ciudad' => $Ciudad,
		            'TipoEstudios' => $TipoEstudios,
		        ]);
		     }

		     if(Auth::user()->hasRoles(['empresa']))
        	{

        		 $iduser = Auth::id();
		         $ciudades = ciudad::all();
		         $registros = informacionempresa::where('usuario_id','=',$iduser)->get(); 
         
        
		        if ($registros->count()==0){
		            return view('empresa.create',compact('ciudades'));
		            
		        }
       			else if($registros->count() > 0){
            		return view('indexempresa.index',compact('registros'));            
            
        		}  
        	}


        }
       
        	
        
    }
}
