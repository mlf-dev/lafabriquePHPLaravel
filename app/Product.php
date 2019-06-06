<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function pictures(){
        return $this->belongsToMany('App\Picture');
    }
}
