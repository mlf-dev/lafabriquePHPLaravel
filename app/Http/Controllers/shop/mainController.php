<?php


namespace App\Http\Controllers\shop;


class mainController
{
    public function home(){
        return view('shop.index');
    }

    public function category(){
        return view('shop.category');
    }

    public function product(){
        return view('shop.product');
    }

    public function products(){
        return view('shop.products');
    }

    public function contact(){
        return view('shop.contact');
    }

    public function concept(){
        return view('shop.concept');
    }
}