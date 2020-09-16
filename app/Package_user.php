<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_user extends Model
{
       protected $fillable=['id','package_id','user_id','weight','height'];
    
}
