<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Order;
use App\Item;

class OrderController extends Controller
{
    public function create(Request $request){
    	$customer = Customer::where('hpNo',$request->hpNo)->first();
    	$order = $customer->orders()->create(['place'=>$request->place,'time'=>$request->time]);
    	$items = Item::select('id')->get();
    	foreach($items as $item){
    		$quantity = "quantity".$item->id;
    		if ($request->$quantity > 0)
    			$order->items()->save($item,['quantity'=>$request->$quantity]);
    	}

    	return redirect('success/'.$order->id);
    }
}
