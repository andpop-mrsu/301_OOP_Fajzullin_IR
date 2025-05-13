<?php

namespace App;

class PayPal
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

<<<<<<< HEAD
    public function transfer($email, $amount)
    {
        return "Paypal Success!";
=======
    public function authorizeTransaction($amount)
    {
        return "PayPal Success!";
>>>>>>> student/Task06
    }
}
