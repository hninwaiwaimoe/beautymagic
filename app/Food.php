<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
       protected $fillable=['id','name','foodtype_id','kalorie','vitamin'];

       public function foodtype()
       {
       	return $this->belongsTo('App\FoodType','foodtype_id');
       }

}
