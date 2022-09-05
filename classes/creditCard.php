<?php

class CreditCard{
    protected $accountholder;
    protected $cardNumber;
    protected $CVS;
    protected $balance;
    protected $expirationMonth;
    protected $expirationYear;

    public function __construct($_accountholder, $_cardNumber, $_CVS, $_balance, $_expirationMonth, $_expirationYear)
    {
        $this->accountholder = $_accountholder;
        $this->cardNumber = $_cardNumber;
        $this->CVS = $_CVS;
        $this->balance = $_balance;
        $this->expirationMonth = $_expirationMonth;
        $this->expirationYear = $_expirationYear;
    }
}