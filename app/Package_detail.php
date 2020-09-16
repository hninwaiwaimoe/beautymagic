<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_detail extends Model
{
       protected $fillable=['id','food_id','package_id','kind','qty','bmi'];
    
}
