<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
      protected $fillable = [
        'ciudad'
    ];
    protected $table = 'ciudades';
    public function informacionempresa(){
    	return $this->hasOne(informacionempresa::class);
    }
    public function infoempleadoudec(){
    	return $this->hasOne(infoempleadoudec::class);
    }
    public function historiallaboral(){
    	return $this->hasMany(historiallaboral::class);
    }
    public function sedeuniversitaria(){
    	return $this->hasOne(sedeuniversitaria::class);
    }
    public function informaciongraduado(){
        return   $this->hasOne(informaciongraduado::class);
    }
}
