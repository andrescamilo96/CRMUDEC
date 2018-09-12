<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programaacademico extends Model
{
     protected $table = 'programasacademicos';

     public function informaciongraduado(){
    	return $this->hasMany(informaciongraduado::class);
    }

     public function sedeuniversitaria(){
    	return $this->belongsTo(sedeuniversitaria::class);
    }


}
