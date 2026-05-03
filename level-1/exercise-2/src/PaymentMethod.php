<?php

declare(strict_types=1);


interface PaymentMethod
{
    public function sendPayment(float $amount): string;
}
