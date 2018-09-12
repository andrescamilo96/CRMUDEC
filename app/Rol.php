<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'roles';

    public function user(){
        return $this->hasOne(user::class);
    }
}
