<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\StoredProduct;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

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

    public function addToCart(Request $request){
        //get the id and find the product
        $product = Product::find($request->id);

        $storedProduct = new StoredProduct($product, $request->quantity);

        //check for the cart session
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        //Create new Cart Object
        $cart = new Cart($oldCart);

        //add to the cart
        $cart->addProduct($storedProduct);

        //create a session to store the product object and the quantity.
        Session::put('cart', $cart);
        Session::save();



    }

    public function getCartSession(){

        dd(Session::has('cart'));

        //$cart = Session::has('cart') ? Session::get('cart') : null;
        $cart = Session::get('cart');

        if($cart === null){
            $cart = [
                'msg' => 'Your cart is empty'
            ];
        }

        dd(Session::get('cart'));

        return $cart;
    }
}
