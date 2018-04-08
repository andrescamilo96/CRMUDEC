<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaAcademico extends Model
{
     protected $table = 'programasacademicos';

     public function informaciongraduado(){
    	return $this->hasMany(InformacionGraduado::class);
    }

     public function sedeuniversitaria(){
    	return $this->belongsTo(SedeUniversitaria::class);
    }


}
