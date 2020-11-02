<?php

class HasPrice
{
	public function getPrice()
	{
		return 0;
	}
}

class Product extends HasPrice
{
	private $name;
	private $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
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

class Basket extends HasPrice
{
	private $products = [];

	public function addProduct(Product $product)
	{
		$this->products[] = $product;
	}

	public function getPrice()
	{
		$price = 0;

		foreach ($this->products as $product)
		{
			$price += $product->getPrice();
		}
		
		return $price;
	}
}

class PriceFormatter
{
	public function format($value)
	{
		return $value;
	}
}

class NumberPriceFormatter extends PriceFormatter
{
	public function format($value)
	{
		return number_format($value, 2, '.', ' ');
	}
}

class HtmlNumberPriceFormatter extends NumberPriceFormatter
{
	public function format($value)
	{
		return '<h1>'.parent::format($value).'</h1';
	}
}

function formatItemPrice(HasPrice $hasPriceItem, PriceFormatter $formatter)
{
	return $formatter->format($hasPriceItem->getPrice());
}

$basket = new Basket();

$productCube = new Product('Kubik', 250000.5);
$productPapusa = new Product('Papusa', 150);

$basket->addProduct($productCube);
$basket->addProduct($productPapusa);

echo "Primul produs ".$productCube->getName()." costa ".formatItemPrice($productCube, new NumberPriceFormatter());
echo "<br>";
echo "Al doilea produs ".$productPapusa->getName()." costa ".$productPapusa->getPrice();
echo "<br>";
echo "Pret total: ".formatItemPrice($basket, new HtmlNumberPriceFormatter());
