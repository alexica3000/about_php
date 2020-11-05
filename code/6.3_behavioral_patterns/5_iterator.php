<?php

class Product
{
    private string $name;
    private float $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function describe()
    {
        return $this->getName() . ': ' . number_format($this->getPrice(), 2, '.', '') . ' euro';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class Basket implements Iterator
{
    private array $products = [];
    private int $currentIndex = 0;

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getPrice()
    {
        $this->rewind();
        $price = 0.0;

        foreach ($this as $product)
        {
            $price += $product->getPrice();
        }

        return number_format($price, 2, '.', ' ');
    }

    public function current() : Product
    {
        return $this->products[$this->currentIndex];
    }

    public function key() : int
    {
        return $this->currentIndex;
    }

    public function next() : int
    {
        return $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid() : bool
    {
        return isset($this->products[$this->currentIndex]);
    }
}

echo '<pre>';
$basket = new Basket();
$basket->addProduct(new Product('Car', 1000));
$basket->addProduct(new Product('Game', 9.9));
$basket->addProduct(new Product('Moto', 200));

foreach ($basket as $product)
{
    echo $product->describe() . PHP_EOL;
}

echo 'Total: ' . $basket->getPrice() . PHP_EOL;
echo '</pre>';
