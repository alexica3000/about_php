<?php

interface Booking
{
    public function calculatePrice() : int;
    public function getDescription() : string;
}

abstract class BookingDecorator implements Booking
{
    protected $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}

class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'Number for two';
    }
}

class WiFi extends BookingDecorator
{
    private const PRICE = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ', with WIFi';
    }
}

class UnlimitedJuiceRefrigerator extends BookingDecorator
{
    private const PRICE = 100;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ', unlimited juice';
    }
}

$booking1 = new WiFi(new DoubleRoomBooking());
$booking2 = new WiFi(new UnlimitedJuiceRefrigerator(new DoubleRoomBooking()));

echo '<pre>';
echo $booking1->getDescription() . ' total: ' . $booking1->calculatePrice() . PHP_EOL;
echo $booking2->getDescription() . ' total: ' . $booking2->calculatePrice() . PHP_EOL;
echo '</pre>';
