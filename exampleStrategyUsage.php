<?php

require_once 'Strategy.php';

$paymentContext = new PaymentContext();

$paymentContext->setStrategy(new CreditCardPayment());
$paymentContext->executePayment(100); // Output: Paid 100 using Credit Card.

$paymentContext->setStrategy(new PayPalPayment());
$paymentContext->executePayment(200); // Output: Paid 200 using PayPal.
?>
