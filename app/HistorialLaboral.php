<?php

namespace App;
use Illuminate\Support\Facades\Crypt;
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

    public function setCargoAttribute($value){
        $this->attributes['cargo']= Crypt::encryptString($value);
    }
    public function setDescripcionAttribute($value){
        $this->attributes['descripcion']= Crypt::encryptString($value);
    }
    public function setEmpresaAttribute($value){
        $this->attributes['empresa']= Crypt::encryptString($value);
    }
    public function getCargoAttribute($value){
        return Crypt::decryptString($value);
    }
    public function getDescripcionAttribute($value){
        return Crypt::decryptString($value);
    }
    public function getEmpresaAttribute($value){
        return Crypt::decryptString($value);
    }
}
