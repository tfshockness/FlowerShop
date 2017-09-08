<?php
/**
 * Created by PhpStorm.
 * User: shockness
 * Date: 2017-09-07
 * Time: 3:57 PM
 */

namespace App;


class Cart
{

    protected $productList = [];



    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->productList = $oldCart->productList;
        }else{
            $this->productList = array();
        }

    }

    public function addProduct(StoredProduct $storedProduct)
    {
        $productExistsCart = false;

        foreach($this->productList as $value)
        {
            if($value->product->id === $storedProduct->getProduct()->id)
            {
                $value->quantity +=  $storedProduct->getQuantity();
                $productExistsCart = true;
            }
        }

        if(!$productExistsCart)
        {
            array_push($this->productList, $storedProduct);
        }

    }

    public function removeProduct(Product $product)
    {

    }

    public function getProductList(){
        return $this->productList;
    }
}