<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('productQuantity');
    }
}