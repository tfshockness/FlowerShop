<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\StoredProduct;
use Session;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Show all the featured products in the store
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $category = Category::with('products')->whereName('Featured')->first();
        return view('shop.index', compact('category'));
    }

    public function show($slug){
        $product = Product::whereSlug($slug)->firstOrFail();
        $related = Product::all()->take(4);
        return view('shop.show', compact('product', 'related'));
    }

    public function categories(){
        return view('shop.categories');
    }

    public function showCart(){
        return view('shop.cart');
    }

    public function showCheckout(){
        return view ('shop.checkout');
    }
}
