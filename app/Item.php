<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['name','price'];

    public function orders(){
    	return $this->belongsToMany('App\Order');
    }
}
