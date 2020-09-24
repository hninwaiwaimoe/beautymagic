<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
       protected $fillable=['duration','price','plan_id'];
    

public function foods($value='')
{
	return $this->belongsToMany('App\Food','package_details')
			    ->withpivot('kind')
			    ->withTimestamps();
}

}