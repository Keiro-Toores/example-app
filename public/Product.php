<?php

class Product{
    private $name;
    private $price;
    private $stock;
    public $inStock;

    public function __construct($name, $price, $inStock = true)
    {
        $this->name = $name;
        $this->price = $price;
        $this->inStock = $inStock;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function addStock($quantity)
    {
         $this->stock += $quantity;
    }

    public function purchase($quantity)
    {
        if ($this->stock >= $quantity) {
            $this->stock -= $quantity;
        }
    }
    
}

$product1 = new Product("Laptop", 999.99);

var_dump($product1->inStock); // true
