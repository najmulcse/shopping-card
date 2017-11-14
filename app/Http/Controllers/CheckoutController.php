<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Cart;
use Carbon;
class CheckoutController extends Controller
{
    public function __construct()
    {
    	return $this->middleware('auth');
    }

    public function shippingAddresss()
    {
        $cats = Category::all();
    	return view('users.shippingAddress',compact('cats'));
    }

    public function payment()
    {
        $cats = Category::all();
    	return view('carts.payment',compact('cats'));
    }
     public function checkPayment(Request $request)
    {
        if($request->trx=='123')
        {
            $order = Auth::user()->orders()->create([
              'total' => Cart::subtotal(),
              'delivered' => 0
            ]);

            $cartItems = Cart::content();
            foreach($cartItems as $cartItem)
            {
              $order->orderItems()->attach($cartItem->id,[
                'quantity' => $cartItem->qty,
                'stotal' => $cartItem->qty*$cartItem->price,
                'created_at' =>Carbon\Carbon::now()
              ]);

                
            }

            Cart::destroy();
            return redirect()->route('index.landing');
        }
    }
}
