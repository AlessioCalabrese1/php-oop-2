<?php

require_once __DIR__ . '/product.php';

class Bed extends Product{
    protected $materials = [];
    protected $length;
    protected $height;
    protected $supplies;

    public function __construct($_brand, $_productName, $_productPrice, $_productCode, $_materials, $_length, $_height, $_supplies)
    {
        parent::__construct($_brand, $_productName, $_productPrice, $_productCode);
        $this->materials = $_materials;
        $this->length = $_length;
        $this->height = $_height;
        $this->supplies = $_supplies;
    }
}