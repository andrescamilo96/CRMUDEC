<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroEstudiantil extends Model
{
     protected $table = 'registrosestudiantiles';
     public function user(){
    	return $this->belongsTo(User::class);
    }


    public function tipoestudio(){
    	return $this->belongsTo(TipoEstudio::class);
    }
}
