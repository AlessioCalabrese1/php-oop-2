<?php

class User{
    protected $firstName;
    protected $lastName;
    protected $shippingAddress;
    protected $discount = 0;

    public function __construct($_firstName, $_lastName, $_shippingAddress)
    {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->shippingAddress = $_shippingAddress;
    }

    public function setFirstName(){

    }

    public function getFirstName(){

    }

    public function setLastName(){

    }

    public function getLastName(){

    }
}