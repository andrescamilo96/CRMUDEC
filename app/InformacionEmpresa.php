<?php

namespace App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;

class informacionempresa extends Model
{
     protected $table = 'informacionempresas';
     public function user(){
    	return $this->belongsTo(user::class);
    }

    public function ciudad(){
    	return $this->belongsTo(ciudad::class);
    }
    protected $fillable = ['nit','razonsocial','direccion','sigla','usuario_id','telefono','ciudad_id','email','validadorempresa'];
    public function setRazonSocialAttribute($value){
        $this->attributes['razonsocial']= Crypt::encryptString($value);
    }
    public function setDireccionAttribute($value){
        $this->attributes['direccion']= Crypt::encryptString($value);
    }
    public function setSiglaAttribute($value){
        $this->attributes['sigla']= Crypt::encryptString($value);
    }
    public function getRazonSocialAttribute($value){
        return Crypt::decryptString($value);
    }
    public function getDireccionAttribute($value){
        return Crypt::decryptString($value);
    }
    public function getEmpresaAttribute($value){
        return Crypt::decryptString($value);
    }
}
