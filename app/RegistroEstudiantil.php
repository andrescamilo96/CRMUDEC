<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroEstudiantil extends Model
{
     protected $table = 'registrosestudiantiles';
     protected $fillable = ['titulo','anofinalizacion','institucion','tipoestudio_id','adjuntosoporte'];
     public function user(){
    	return $this->belongsTo(User::class);
    }


    public function tipoestudio(){
    	return $this->belongsTo(TipoEstudio::class);
    }
}
