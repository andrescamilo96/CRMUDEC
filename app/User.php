<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function rol(){
        return $this->belongsTo(Rol::class);
    }
    public function informaciongraduado(){
        return $this->hasOne(InformacionGraduado::class);
    }
    public function registoestudiantil(){
        return $this->hasMany(RegistroEstudiantil::class);
    }
    public function historiallaboral(){
        return $this->hasMany(HistorialLaboral::class);   
    }
    public function informacionempresa(){
        return $this->hasOne(InformacionEmpresa::class);
    }
    public function infoempleadoudec(){
        return $this->hasOne(InfoEmpleadoUdec::class);
    }
    public function solicitud(){
        return $this->hasMany(Solicitud::class);
    }
    public function notificacion(){
        return $this->hasMany(Notificacion::class);
    }


}
