<?php

require_once __DIR__ . '/../inclusions.php';

class Cart{
    protected $cartUser;
    protected $associatedCreditCards = [];
    protected $cartItems = [];

    public function __construct($_cartUser, $_associatedCreditCards)
    {   
        $this->cartUser = $_cartUser;
        $this->associatedCreditCards = $_associatedCreditCards;
    }

    public function getAsociatedCreditCards(){
        return $this->associatedCreditCards;
    }

    public function addProduct($productToAdd){
        array_push($this->cartItems, $productToAdd);
        return $this->cartItems;
    }
}