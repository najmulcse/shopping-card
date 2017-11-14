<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

   public function contact()
    {
        return view('contact');
    }

    public function orderList(){

    	  $orders = Auth::user()->orders()->orderBy('created_at','des')->get();

    	 // foreach($orders as $order)
    	 // {
    	 // 	 return $order->orderItems()->get();
    	 // }
    	 return view('users.orderList',compact('orders'));
    }
}
