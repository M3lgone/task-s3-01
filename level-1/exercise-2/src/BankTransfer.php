<?php

declare(strict_types=1);

class BankTransfer implements PaymentMethod
{
    public function sendPayment(float $amount): string
    {
        return "Transfer bank for {$amount} done";
    }
}
