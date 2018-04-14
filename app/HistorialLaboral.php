<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialLaboral extends Model
{
    protected $table = 'historialeslaboral';
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function ciudad(){
    	return $this->belongsTo(Ciudad::class);
    }
    protected $fillable=['cargo','descripcion','empresa','anoslaborados','rangoingresos','direccionempresa','adjuntosoporte','telefonoempresa','usuario_id','ciudadempresa_id'];
}
