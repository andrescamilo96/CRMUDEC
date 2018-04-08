<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionGraduado extends Model
{
     protected $table = 'informaciongraduados';
     public function user(){
    	return $this->belongsTo(User::class);
    }
    public function ciudad(){
    	return $this->belongsTo(Ciudad::class);
    }
}
