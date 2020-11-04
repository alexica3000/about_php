<?php

interface Transport
{
    public function move($product);
}

class Boat implements Transport
{
    public function move($product)
    {
        echo $product . ' rides on water.' . PHP_EOL;
    }
}

class Car implements Transport
{
    public function move($product)
    {
        echo $product . ' is driving on the road.' . PHP_EOL;
    }
}

interface FactoryMethod
{
    public function getTransport($product) : Transport;
}

class TransportFactory implements FactoryMethod
{
    const ROAD_TRANSPORT = 'road';
    const WATER_TRANSPORT = 'water';

    public function getTransport($product) : Transport
    {
        $transport = $this->getOptimalWayForProduct($product);

        switch ($transport) {
            case static::ROAD_TRANSPORT:
                return new Car();
            case static::WATER_TRANSPORT:
                return new Boat();
        }
    }

    private function getOptimalWayForProduct($product)
    {
        $optimalWay = [
            'squirrel' => TransportFactory::ROAD_TRANSPORT,
            'cat'      => TransportFactory::ROAD_TRANSPORT,
            'hippo'    => TransportFactory::WATER_TRANSPORT
        ];

        return $optimalWay[$product];
    }
}

echo '<pre>';

$products = ['squirrel', 'cat', 'hippo'];

foreach ($products as $product) {
    $transport = (new TransportFactory())->getTransport($product);
    $transport->move($product);
}

echo '</pre>';
