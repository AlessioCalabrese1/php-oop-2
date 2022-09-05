<?php

require_once __DIR__ . '/product.php';

class Food extends Product{
    protected $type;
    protected $ingredients = [];
    protected $animal;
    protected $animal_age;
    protected $weight;

    public function __construct($_brand, $_productName, $_productPrice, $_productCode, $_type, $_ingredients, $_animal, $_animal_age, $_weight = [])
    {
        parent::__construct($_brand, $_productName, $_productPrice, $_productCode);
        $this->type = $_type;
        $this->ingredients = $_ingredients;
        $this->animal = $_animal;
        $this->animal_age = $_animal_age;
        $this->weight = $_weight;
    }
}