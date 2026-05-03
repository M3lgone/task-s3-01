<?php

declare(strict_types=1);

require_once __DIR__ . '/../src/PaymentMethod.php';
require_once __DIR__ . '/../src/PaymentProcessor.php';
require_once __DIR__ . '/../src/PaypalPaymentGateway.php';
require_once __DIR__ . '/../src/StripePaymentGateway.php';
require_once __DIR__ . '/../src/BankTransfer.php';

$paypal = new PayPalPaymentGateway();
$processorWithPaypal = new PaymentProcessor($paypal);
echo $processorWithPaypal->execute(150.75) . PHP_EOL;


$stripe = new StripePaymentGateway();
$processorWithStripe = new PaymentProcessor($stripe);
echo $processorWithStripe->execute(300.00) . PHP_EOL;


$bankTransfer = new BankTransfer();
$processorWithBankTransfer = new PaymentProcessor($bankTransfer);
echo $processorWithBankTransfer->execute(250.00) . PHP_EOL;
