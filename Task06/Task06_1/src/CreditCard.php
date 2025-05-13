<?php

namespace App;

class CreditCard
{
<<<<<<< HEAD
    private $number;
    private $expiration;

    public function __construct($number, $expiration)
    {
        $this->number = $number;
        $this->expiration = $expiration;
    }

    public function authorizeTransaction($amount)
    {
        return "Authorization code: 234da";
=======
    private $cardNumber;
    private $expirationDate;

    public function __construct($cardNumber, $expirationDate)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    public function transfer($amount)
    {
        return "Authorization code: 777";
>>>>>>> student/Task06
    }
}
