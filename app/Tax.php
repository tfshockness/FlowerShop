<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function addons(){
        return $this->hasMany(Addon::class);
    }
}
