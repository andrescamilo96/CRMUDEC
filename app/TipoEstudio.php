<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoestudio extends Model
{
	  protected $fillable = [
        'tipoestudio'
    ];
    protected $table = 'tipoestudios';
    public function registroestudiantil(){
        return $this->hasMany(registroestudiantil::class);   
    }
}
