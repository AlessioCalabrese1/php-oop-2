<?php

require_once __DIR__ . '/../inclusions.php';

class Cart{
    protected $cartUser;
    protected $associatedCreditCards = [];

    public function __construct($_cartUser, $_associatedCreditCards)
    {   
        $this->cartUser = $_cartUser;
        $this->associatedCreditCards = $_associatedCreditCards;
    }
}