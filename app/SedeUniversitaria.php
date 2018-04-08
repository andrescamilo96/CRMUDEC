<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SedeUniversitaria extends Model
{
     protected $table = 'sedesuniversitarias';

     public function programaacademico(){
    	return $this->hasMany(ProgramaAcademico::class);
    }

     public function ciudad(){
    	return $this->belongsTo(Ciudad::class);
    }
}
