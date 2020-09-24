<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
       protected $fillable=['name','description'];

       public function food()
       {
       	return $this->belongsTo('App\Food','food_id');
       }

       public function packages()
       {
       	return $this->hasMany('App\Package');
       }
    
}
