<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded =[''];
    protected $table = "categories";

    public function subcategories()
    {
    	return $this->hasMany('App\SubCategory','cid','id');
    }
}
