<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sedeuniversitaria extends Model
{
     protected $table = 'sedesuniversitarias';

     public function programaacademico(){
    	return $this->hasMany(programaacademico::class);
    }

     public function ciudad(){
    	return $this->belongsTo(ciudad::class);
    }
}
