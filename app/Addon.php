<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    public function tax(){
        return $this->belongsTo(Tax::class);
    }
}
