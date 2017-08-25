<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('productQuantity');
    }

    public function delivery(){
        return $this->belongsTo(Delivery::class);
    }

    public function shipping(){
        return $this->belongsTo(Shipping::class);
    }

    public function setTotal(Array $products, Delivery $delivery ){
        $total = 0;
        if($products !== null && $delivery !== null){

            for($i = 0; $i < sizeof($products); $i++){

                $total += ($products[$i]->price * ($products[$i]->tax->percentageRate + 1));
            }
              $this->setTotalAttribute($total + $delivery->price);
        }
    }

    public function calculateTotal(){
        $total = 0;
        foreach($this->products as $product){
            $total += ($product->price * $product->pivot->productQuantity) * ($product->tax->percentageRate + 1);
        }
        $this->setTotalAttribute($total + $this->delivery->price);
    }

    public function setTotalAttribute($value){
        $this->attributes['total'] = $value;
    }
}
