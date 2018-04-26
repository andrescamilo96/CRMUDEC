<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';
    public function usuario()
    {
    	return $this->belongsTo(User::class);
    }
    protected $fillable = ['correo','asunto','telefonocontacto','solicitud','usuario_id','indrespuesta','solicitudrespuesta'];
}
