<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
//view all orders from a registered user
public function index(){
   
        $user = auth()->user();
        $orders = $user->orders()->with('product')->get();   
        //return response()->json(['orders' => $orders], 200);
        return  OrderResource::collection($orders);

    }




//store an order
public function store(Request $request){

    $request->validate([
        'product_id' => 'required|exists:products,id',
    ]);

    $user = auth()->user();
    $order = $user->orders()->create([
        'product_id' => $request->input('product_id'),
        'status' => 'pending'
    ]);

    return (new OrderResource($order))->additional(['message'=> 'Order create successfully']);
}

}
