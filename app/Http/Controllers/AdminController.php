<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\SubCategory;
class AdminController extends Controller
{
	public function __construct(){

    	 $this->middleware('auth');
    	 $this->middleware('isAdmin');
    }
    public function index(){
        $cats = Category::all();
    	return view('admins.index',compact('cats'));

    }

    public function category()
    {
        $cats =Category::all();
        return view('admins.category',compact('cats'));
    }

    public function addCategory(Request $request)
    {
        $rules = [
            'category'      => 'required'
        ];

        $this->validate($request, $rules);

        $category = new Category;
        $category->name = $request->category;
        $category->save();
        $cats =Category::all();
        return view("admins.intercoolerResult",compact('cats'))->with('msg',"Category added successfully");
    }
     public function subCategory()
    {
    	$cats =Category::all();
    	return view('admins.subCategory',compact('cats'));
    }

    public function addSubCategory(Request $request)
    {
        $rules = [
            'category'      => 'required',
            'sub_category'  => 'required'
        ];

        $this->validate($request, $rules);
       
        $subcategory = new SubCategory;
        $subcategory->cid  = $request->category; 
        $subcategory->name = $request->sub_category;
        $subcategory->save();

       $cats =Category::all();
       return view("admins.intercoolerresultforSubcat",compact('cats'))->with('msg',"Category added successfully");
    }
}
