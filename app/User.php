<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPasswordNotification;
class user extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','cedulausuario','aceptaleydatos'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role(){
        return $this->belongsTo(rol::class);
    }
    public function informaciongraduado(){
        return $this->hasOne(informaciongraduado::class);
    }
    public function registoestudiantil(){
        return $this->hasMany(registoestudiantil::class);
    }
    public function historiallaboral(){
        return $this->hasMany(historiallaboral::class);   
    }
    public function informacionempresa(){
        return $this->hasOne(informacionempresa::class);
    }
    public function infoempleadoudec(){
        return $this->hasOne(infoempleadoudec::class);
    }
    public function solicitud(){
        return $this->hasMany(solicitud::class);
    }
    public function notificacion(){
        return $this->hasMany(notificacion::class);
    }
     public function hasRoles( array $roles)
    {
      
         foreach ($roles as $role) {
             # code...
            if ($this->role->name === $role){
                return true;
            }
         }
         return false;
    
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}
