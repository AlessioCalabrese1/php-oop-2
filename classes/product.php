<?php

class Product{
    protected $brand;
    protected $productName;
    protected $productPrice;
    protected $productCode;
    
    public function __construct($_productName, $_productPrice, $_productCode)
    {
        $this->productName = $_productName;
        $this->productPrice = $_productPrice;
        $this->productCode = $_productCode;
    }

}