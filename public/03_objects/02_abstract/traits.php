<?php

trait SendMail
{
    public function sendMail($email, $text)
    {
        echo 'Mail is send to ' . $email . PHP_EOL;
    }
}

trait FormatPrice
{
    private function formatPrice($number)
    {
        return $number . ' euro';
    }
}

class Order
{
    use SendMail;
    use FormatPrice;

    public function sendNotification($email)
    {
        $this->sendMail($email, 'Your order for ' . $this->formatPrice('1000') . 'has been send.');
    }
}

$order = new Order();
$order->sendNotification('test@test.com');
