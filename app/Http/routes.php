<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'index.landing','uses'=>'ProductController@landing']);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('contact',['as'=>'contact','uses'=>'UserController@contact']);
Route::get('orderList',['as'=>'orderList','uses'=>'UserController@orderList']);
Route::get('single/{id}',['as'=>'single.product','uses'=>'ProductController@singleProduct']);
Route::get('shoppingCart',['as'=>'shoppingCart', 'uses'=>'ProductController@shoppingCart']);
Route::get('add-to-cart/{id}',['as'=>'product.addToCart','uses'=>'ProductController@getAddToCart']);
Route::get('cart-destroy/{id}',['as'=>'cart.destroy','uses'=>'ProductController@destroy']);
Route::post('cart-update/{id}',['as'=>'cart.updateQuantity','uses'=>'ProductController@updateQuantity']);
Route::get('products/',['as'=>'products.category','uses'=>'ProductController@productsCategory']);
Route::get('product/shippingAddress',['as'=>'product.shippingAddresss','uses'=>'CheckoutController@shippingAddresss']);
Route::get('product/payment',['as'=>'product.payment','uses'=>'CheckoutController@payment']);
Route::post('checkPayment',['as'=>'checkPayment','uses'=>'CheckoutController@checkPayment']);



//-----------------Admin-----------------------
Route::group(['middleware' => ['auth','isAdmin']],function(){

	Route::get('admin',['as' => 'admin' , 'uses' => 'AdminController@index']);
	Route::get('admin/category',['as' => 'admin.category' , 'uses' => 'AdminController@category']);
	Route::post('admin/add-category',['as' => 'add.category' , 'uses' => 'AdminController@addCategory']);
	Route::get('admin/sub-category',['as' => 'admin.subcategory' , 'uses' => 'AdminController@subCategory']);
	Route::post('admin/add-sub-category',['as' => 'add.subcategory' , 'uses' => 'AdminController@addSubCategory']);



});
