<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

  //fetch all orders or fetch orders with filtering by customer or order status or both
  public function index(Request $request){
   
    $users =User::all();
    $orders=Order::with(['product' , 'user']);

     if($request->user_id){
    $orders=$orders->whereuser_id($request->user_id);
     }
     if($request->state){
      $orders=$orders->where('status',$request->state);
  }

     $orders= $orders->get();
     if($orders->isEmpty()){
      $message="This customer has not purchased anything yet";
     }else{
      $message=null;
     }

     return view('orders.index', compact('orders' , 'users' , 'message'));
   }


//show one order by id
   public function show($id){
    $order=Order::with(['product' ,'user'])->findorfail($id);
    return view('orders.show', compact('order'));
  }


  public function destroy($id){
    $order = Order::findorfail($id);
    $order->delete();
    return redirect()->back();
  }


  //change the status of the order by the admin
  public function updateStatus(Request $request , $id){

    $request->validate([
      'status' => 'required|in:pending,completed,canceled' 
    ]);

    $order=Order::findorfail($id);
    $order->status=$request->status;
    $order->save();
    return redirect()->back()->with('success' , 'success changed');

  }
}
