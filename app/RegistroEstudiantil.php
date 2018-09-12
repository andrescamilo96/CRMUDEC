<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registroestudiantil extends Model
{
     protected $table = 'registrosestudiantiles';
     protected $fillable = ['titulo','anofinalizacion','institucion','tipoestudio_id','adjuntosoporte','certificadoconvalidacion','usuario_id'];
     public function user(){
    	return $this->belongsTo(user::class);
    }


    public function tipoestudio(){
    	return $this->belongsTo(tipoestudio::class);
    }
}
