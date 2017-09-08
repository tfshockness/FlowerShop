<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\StoredProduct;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function categories(){
        $categories = Category::all();
        return $categories;
    }

    public function categoryById($id){
        $categories = Category::with('products')->find($id);
        return $categories;
    }

    public function productsByCategory(){
        $categories = Category::with('products')->whereName('Featured')->first();
        return $categories;
    }

    public function addToCart($id, $quantity){
        //get the id and find the product
        $product = Product::find($id);

        $storedProduct = new StoredProduct($product, $quantity);

        //check for the cart session
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        //Create new Cart Object
        $cart = new Cart($oldCart);

        //add to the cart
        $cart->addProduct($storedProduct);

        //create a session to store the product object and the quantity.
        Session::put('cart', $cart);

    }

    public function getCartSession(){

        $cart = Session::has('cart') ? Session::get('cart') : null;

        if($cart === null){
            $cart = [
                'msg' => 'Your cart is empty'
            ];
        }
        return $cart;
    }
}
