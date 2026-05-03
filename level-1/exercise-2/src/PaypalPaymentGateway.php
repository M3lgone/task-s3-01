<?php

declare(strict_types=1);

class PayPalPaymentGateway implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "Payment for {$amount} processed by Paypal";
    }
}
