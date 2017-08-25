<?php

namespace App\Http\Controllers;
use App\Category;
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
}
