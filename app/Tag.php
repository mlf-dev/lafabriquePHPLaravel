<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function products(){
        //permet de faire le lien avec plusieurs produits
        return $this->belongsToMany('App\Product');
    }
}
