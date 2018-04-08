<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
     protected $table = 'notificaciones';
     public function user(){
    	return $this->belongsTo(User::class);
    }
}
