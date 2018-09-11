<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
      protected $fillable = [
        'ciudad'
    ];
    protected $table = 'ciudades';
    public function informacionempresa(){
    	return $this->hasOne(InformacionEmpresa::class);
    }
    public function infoempleadoudec(){
    	return $this->hasOne(InfoEmpleadoUdec::class);
    }
    public function historiallaboral(){
    	return $this->hasMany(HistorialLaboral::class);
    }
    public function sedeuniversitaria(){
    	return $this->hasOne(SedeUniversitaria::class);
    }
    public function informaciongraduado(){
        return   $this->hasOne(InformacionGraduado::class);
    }
}
