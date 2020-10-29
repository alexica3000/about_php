<?php

namespace App\Magazin;

class Order
{
	public function __construct(Basket $basket)
	{
		$this->basket = $basket;
	}
	
	public function getBasket()
	{
		return $this->basket;
	}

	public function getPrice()
	{
		return $this->getBasket()->getPrice();
	}
}

class Basket
{
	public $products = [];
	public $price;
	public $quantity;
	
	public function addProduct(Product $product, $quantity)
	{
		$this->products[] = $product->name;
		$this->price[] = $product->price;
		$this->quantity[] = $quantity;
	}

	public function getPrice()
	{
		$priceTotal = 0;

		for ($i=0;$i<count($this->price);$i++)
		{
			$priceTotal += $this->price[$i] * $this->quantity[$i];
		}
		return $priceTotal;
	}

	public function describe()
	{
		for ($i=0;$i<count($this->products);$i++)
		{
			echo "<div>".$this->products[$i]." - ".$this->price[$i]." - ".$this->quantity[$i]."</div>";
		}
	}
}

class Product
{
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

