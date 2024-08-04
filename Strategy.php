<?php

interface PaymentStrategy {
    public function pay($amount);
}

class CreditCardPayment implements PaymentStrategy {
    public function pay($amount) {
        echo "Paid " . $amount . " using Credit Card.<br>";
    }
}

class PayPalPayment implements PaymentStrategy {
    public function pay($amount) {
        echo "Paid " . $amount . " using PayPal.<br>";
    }
}

class PaymentContext {
    private $strategy;

    public function setStrategy(PaymentStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function executePayment($amount) {
        $this->strategy->pay($amount);
    }
}
?>
