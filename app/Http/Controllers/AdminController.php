<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
class AdminController extends Controller
{
	public function __construct(){

    	 $this->middleware('auth');
    	 $this->middleware('isAdmin');
    }
    public function index(){
    	return view('admins.index');
    }

    public function category()
    {
    	$categories =Category::all();
    	return view('admins.category');
    }
}
