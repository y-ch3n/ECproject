<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;

class ItemController extends Controller
{
    public function showMenuList(){

    	$drinks = Item::where('type','drink')->get();
    	$eats = Item::where('type','eat')->get();
    	return view('menu',compact('drinks','eats'));
    }

    public function showBuyList(){
        $drinks = Item::where('type','drink')->get();
        $eats = Item::where('type','eat')->get();
        return view('buy',compact('drinks','eats'));
    }

    public function showPicture($id)
    {
        $picture = Item::findOrFail($id);
        $pic = Image::make($picture->pic);
        $response = Response::make($pic->encode('jpeg'));

        //setting content-type
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function success($id){
        $total = 0;
        $items = \DB::table('item_order')->where('order_id',$id)->get();
        $order = Order::find($id);
        $customer = $order->customer;
        foreach($items as $item){
            $item->name = Item::find($item->item_id)->name;
            $item->price = Item::find($item->item_id)->price;
            $total += $item->price * $item->quantity;
        }
        return view('success',compact('items','total','order','customer'));
    }
}
