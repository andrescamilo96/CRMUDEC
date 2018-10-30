<?php

namespace App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;

class registroestudiantil extends Model
{
     protected $table = 'registrosestudiantiles';
     protected $fillable = ['titulo','anofinalizacion','institucion','tipoestudio_id','adjuntosoporte','certificadoconvalidacion','usuario_id'];
     public function setTituloAttribute($value){
        $this->attributes['titulo']= Crypt::encryptString($value);
    }
    public function setInstitucionAttribute($value){
        $this->attributes['institucion']= Crypt::encryptString($value);
    }
    
    public function getInstitucionAttribute($value){
        return Crypt::decryptString($value);
    }
    public function getTituloAttribute($value){
        return Crypt::decryptString($value);
    }
     public function user(){
    	return $this->belongsTo(user::class);
    }


    public function tipoestudio(){
    	return $this->belongsTo(tipoestudio::class);
    }
}
