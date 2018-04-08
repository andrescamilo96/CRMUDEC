<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionEmpresa extends Model
{
     protected $table = 'informacionempresas';
     public function user(){
    	return $this->belongsTo(User::class);
    }

    public function ciudad(){
    	return $this->belongsTo(Ciudad::class);
    }
}
