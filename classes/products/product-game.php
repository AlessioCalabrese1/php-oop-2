<?php

require_once __DIR__ . '/product.php';

class Game extends Product{
    protected $materials = [];
    protected $lenght;
    protected $height;

    public function __construct($_brand, $_productName, $_productPrice, $_productCode, $_materials, $_length, $_height)
    {
        parent::__construct($_brand, $_productName, $_productPrice, $_productCode);
        $this->materials = $_materials;
        $this->lenght = $_length;
        $this->height = $_height;
    }
}