<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
}
