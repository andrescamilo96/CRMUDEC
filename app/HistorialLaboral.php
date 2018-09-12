<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historiallaboral extends Model
{
    protected $table = 'historialeslaboral';
    public function user(){
    	return $this->belongsTo(user::class);
    }
    public function ciudade(){
    	return $this->belongsTo(ciudad::class);
    }
    protected $fillable=['cargo','descripcion','empresa','anoslaborados','rangoingresos','direccionempresa','adjuntosoporte','telefonoempresa','usuario_id','ciudadempresa_id'];
}
