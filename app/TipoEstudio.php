<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEstudio extends Model
{
	  protected $fillable = [
        'tipoestudio'
    ];
    protected $table = 'tipoestudios';
    public function registroestudiantil(){
        return $this->hasMany(RegistroEstudiantil::class);   
    }
}
