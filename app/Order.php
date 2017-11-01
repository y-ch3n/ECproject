<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['place','time'];

    public function items(){
    	return $this->belongsToMany('App\Item');
    }

    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
}
