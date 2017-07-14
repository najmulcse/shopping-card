<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use Cart;
class ProductController extends Controller
{
    public function landing()
    {
            $products = Product::all();
            return view('welcome',compact('products'));
    }

    public function singleProduct(Product $id)
    {
    
    	return view('products.single',compact('id'));
    }

    public function productsCategory()
    {
    	return view('products.products');
    }
    public function shoppingCart()
    {
    	$cartItems = Cart::content();
    	return view('carts.shoppingCart',compact('cartItems'));

    }

    public function getAddToCart(Request $request ,$id)
    {
    	$product = Product::find($id);
    	
    	$cart = Cart::add($id,$product->name,1,$product->price);

    	return back();

    }
    public function destroy($id)
    {
    	Cart::remove($id);
    	return back();
    }
    public function updateQuantity(Request $request, $id)
    {

    	Cart::update($id,$request->quantity);
    	return back();
    }
}
