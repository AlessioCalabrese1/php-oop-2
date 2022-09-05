<?php 

require_once __DIR__ . '/user.php';

class NonRegisteredUser extends User{
    protected $discount = 0;

    public function __construct($_firstName, $_lastName, $_shippingAddress)
    {
        parent::__construct($_firstName, $_lastName, $_shippingAddress);
    }
}