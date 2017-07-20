<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Cart;
class CheckoutController extends Controller
{
    public function __construct()
    {
    	return $this->middleware('auth');
    }

    public function shippingAddresss()
    {
    	return view('users.shippingAddress');
    }

    public function payment()
    {
    	return view('carts.payment');
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
                'stotal' => $cartItem->qty*$cartItem->price
              ]);

                // $product =Product::create([
                //     'product_id'
                //     ]);
            }

            Cart::destroy();
            return redirect()->route('index.landing');
        }
    }
}
