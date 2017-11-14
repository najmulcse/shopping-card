<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	
    protected $fillable = ['total','delivered'];

    public function orderItems()
    {
      return $this->belongsToMany(Product::class)->withPivot('quantity','stotal');
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
