<?php

namespace App;

<<<<<<< HEAD
class PayPalAdapter implements PaymentAdapterInterface
{
=======
use App\PayPal;

class PayPalAdapter implements PaymentAdapterInterface
{
    private $paypal;

    public function __construct(PayPal $paypal)
    {
        $this->paypal = $paypal;
    }

    public function collectMoney($amount)
    {
        $result = $this->paypal->authorizeTransaction($amount);
        if ($result === 'PayPal Success!') {
            return true;
        }
        return false;
    }
>>>>>>> student/Task06
}
