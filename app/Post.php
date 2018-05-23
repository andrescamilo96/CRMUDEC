<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\PostCreated;
class Post extends Model
{
    //{}
    protected $guarded = [];

   protected $dispatchesEvents = [

    'created' => PostCreated::class
    
    ];
}
