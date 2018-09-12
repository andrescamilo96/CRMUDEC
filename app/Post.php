<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\postcreated;
class post extends Model
{
    //{}
    protected $guarded = [];

   protected $dispatchesEvents = [

    'created' => postcreated::class
    
    ];
}
