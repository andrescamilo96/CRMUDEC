<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infoempleadoudec extends Model
{
     protected $table = 'infoempleadosudec';
     public function user(){
    	return $this->belingsTo(user::class);
    }
    public function ciudad(){
    	return $this->belongsTo(ciudad::class);
    }
}
