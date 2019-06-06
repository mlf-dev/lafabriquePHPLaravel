<?php


namespace App\Http\Controllers\shop;


use App\Category;
use App\Product;
use Illuminate\Http\Request;

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

    public function viewByCat(Request $request){
        $id_category = $request->id;
        $category = Category::find($id_category);
        $products = $category->products;
        return view('shop.category', compact('category', 'products'));
    }

    public function products(Request $request){
        $categories = Category::all();
        $products = Product::all();
        return view('shop.products', compact('categories', 'products'));
    }

    public function contact(){
        return view('shop.contact');
    }

    public function concept(){
        return view('shop.concept');
    }
}