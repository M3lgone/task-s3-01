<?php

declare(strict_types=1);


class PaymentProcessor
{
    private PaymentMethod $paymentmethod;

    public function __construct(PaymentMethod $paymentMethod)
    {
        $this->paymentmethod = $paymentMethod;
    }

    public function execute(float $amount): string
    {
        return $this->paymentmethod->sendPayment($amount);
    }
}
