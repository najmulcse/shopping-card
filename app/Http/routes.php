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
Route::get('single/{id}',['as'=>'single.product','uses'=>'ProductController@singleProduct']);
Route::get('shoppingCart',['as'=>'shoppingCart', 'uses'=>'ProductController@shoppingCart']);
Route::get('add-to-cart/{id}',['as'=>'product.addToCart','uses'=>'ProductController@getAddToCart']);
