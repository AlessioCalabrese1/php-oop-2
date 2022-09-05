<?php

require_once __DIR__ . '/user.php';

class RegisteredUser extends User{
    protected $username;
    protected $password;
    protected $discount = 20;

    public function __construct($_firstName, $_lastName, $_shippingAddress, $_username, $_password)
    {
        parent::__construct($_firstName, $_lastName, $_shippingAddress);
        $this->username = $_username;
        $this->password = $_password;
    }
}