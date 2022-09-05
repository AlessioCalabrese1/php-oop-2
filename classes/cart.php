<?php

require_once __DIR__ . '/../inclusions.php';

class Cart{
    protected $cartUser;
    public $associatedCreditCard;
    protected $cartItems = [];

    public function __construct($_cartUser, $_associatedCreditCard)
    {   
        $this->cartUser = $_cartUser;
        $this->associatedCreditCard = $_associatedCreditCard;
    }

    public function getAsociatedCreditCards(){
        return $this->associatedCreditCards;
    }

    public function addProduct($productToAdd){
        array_push($this->cartItems, $productToAdd);
        return $this->cartItems;
    }

    public function getOrderPrice(){
        $orderPrice = 0;
        foreach ($this->cartItems as $item) {
            $orderPrice += $item->productPrice;
        }
        return $orderPrice;
    }

    public function pay(){
        $this->associatedCreditCard->balance -= $this->getOrderPrice();
    }
}