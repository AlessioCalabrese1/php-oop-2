<?php

class Product{
    protected $brand;
    protected $productName;
    public $productPrice;
    protected $productCode;
    
    public function __construct($_brand, $_productName, $_productPrice, $_productCode)
    {
        $this->brand = $_brand;
        $this->productName = $_productName;
        $this->productPrice = $_productPrice;
        $this->productCode = $_productCode;
    }

}