<?php

final class Money
{
    private $amount;
    private $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function isEqual(Money $money)
    {
        if ($this->getCurrency() === $money->getCurrency()) {
            return $this->getAmount() === $money->getAmount();
        } else {
            // convert value and compare
        }
    }
}

$money1 = new Money(1, '$');
$money2 = new Money(1, '$');

echo '<pre>';
echo ($money1 === $money2 ? 'Equal' : 'Not equal') . PHP_EOL;
echo ($money1->isEqual($money2) ? 'Equal' : 'Not equal') . PHP_EOL;
echo '</pre>';
