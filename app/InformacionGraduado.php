<?php

namespace App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;

class informaciongraduado extends Model
{
     protected $table = 'informaciongraduados';
     public function user(){
    	return $this->belongsTo(user::class);
    }
    public function ciudad(){
    	return $this->belongsTo(ciudad::class);
    }
    public function programa(){
    	return $this->belongsTo(programaacademico::class);
    }
    protected $fillable = ['telefono','anograduacion','semestregraduacion','residencia','estadocivil','estrato','sexo','descripcionperfil','user_id','programa_id','ciudadresidencia_id']; 
    public function setDescripcionPerfilAttribute($value){
        $this->attributes['descripcionperfil']= Crypt::encryptString($value);
    }
    
    public function getDescripcionPerfilAttribute($value){
        return Crypt::decryptString($value);
    }
}
