<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionGraduado extends Model
{
     protected $table = 'informaciongraduados';
     public function user(){
    	return $this->belongsTo(User::class);
    }
    public function ciudad(){
    	return $this->belongsTo(Ciudad::class);
    }
    public function programa(){
    	return $this->belongsTo(ProgramaAcademico::class);
    }
    protected $fillable = ['telefono','anograduacion','semestregraduacion','residencia','estadocivil','estrato','sexo','descripcionperfil','user_id','programa_id','ciudadresidencia_id']; 
}
