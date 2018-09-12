<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    protected $table = 'solicitudes';
    protected $guarded = ['id'];
    
  public function usuario()
    {
    	return $this->belongsTo(user::class);
    }
     
    protected $fillable = ['correo','asunto','telefono','solicitud','usuario_id','indrespuesta','solicitudrespuesta'];

   
}
