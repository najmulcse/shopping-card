<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Session;
use App\Cart;

class ProductController extends Controller
{
	public function landing()
    {
            $products = Product::all();
            return view('welcome',compact('products'));
    }

    public function singleProduct(Product $id)
    {
    
    	return view('single',compact('id'));
    }

    public function shoppingCart()
    {
    	if(!Session::has('cart')){
    		return view('carts.checkout');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('carts.shoppingCart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);

    }

    public function getAddToCart(Request $request ,$id)
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null ;
    	$cart    = new Cart($oldCart);
    	$cart->add($product,$id);
    	$request->session()->put('cart', $cart);
    	
    	return redirect()->route('index.landing');

    }
}
