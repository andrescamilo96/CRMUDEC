<?php

namespace App;

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
}
