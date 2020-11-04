<?php

interface Balance
{
    public function getBalance();
}

class BankAccount implements Balance
{
    public function getBalance()
    {
        sleep(2);

        return 100;
    }
}

class BankAccountProxy extends BankAccount implements Balance
{
    protected $balance;

    public function getBalance()
    {
        if (!is_null($this->balance)) {
            return $this->balance;
        }

        return $this->balance = parent::getBalance();
    }
}

echo '<pre>';
$bankAccount = new BankAccount();
echo date('H:i:s') . ' - ' . $bankAccount->getBalance() . ' - ' . date('H:i:s') . PHP_EOL;
echo date('H:i:s') . ' - ' . $bankAccount->getBalance() . ' - ' . date('H:i:s') . PHP_EOL;

$bankAccountProxy = new BankAccountProxy();
echo date('H:i:s') . ' - ' . $bankAccountProxy->getBalance() . ' - ' . date('H:i:s') . PHP_EOL;
echo date('H:i:s') . ' - ' . $bankAccountProxy->getBalance() . ' - ' . date('H:i:s') . PHP_EOL;
echo '</pre>';
