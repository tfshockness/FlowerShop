<?php
namespace App;


class StoredProduct
{
    private $product;
    private $quantity;

    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public  function getQuantity()
    {
        return $this->quantity;
    }
}