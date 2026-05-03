<?php

declare(strict_types=1);

class StripePaymentGateway implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "Payment for {$amount} processed with Stripe";
    }
}
