<?php

interface PaymentStrategy
{
    public function pay($amount);
}

class Order
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function pay(PaymentStrategy $strategy)
    {
        $strategy->pay($this->amount);
    }
}

class YanMoneyPayment implements PaymentStrategy
{
    public function pay($amount)
    {
        echo 'Payment through Yan Money, sum: ' . $amount . PHP_EOL;
    }
}

class InnerAccountPayment implements PaymentStrategy
{
    public function pay($amount)
    {
        echo 'Get money from inter account: ' . $amount . PHP_EOL;
    }
}

echo '<pre>';

$order = new Order(100);
$order->pay(rand(0, 1) ? new YanMoneyPayment() : new InnerAccountPayment());

echo '</pre>';
