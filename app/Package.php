<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
       protected $fillable=['id','name','duration','plan_id'];
    
}
