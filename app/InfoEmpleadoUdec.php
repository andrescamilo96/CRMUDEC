<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoEmpleadoUdec extends Model
{
     protected $table = 'infoempleadosudec';
     public function user(){
    	return $this->belingsTo(User::class);
    }
    public function ciudad(){
    	return $this->belongsTo(Ciudad::class);
    }
}
