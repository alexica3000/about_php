<?php

namespace App\Shop;

class Order
{
	public $basket;
	
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
	
	public function addProduct(Product $product, $quantity)
	{
		$this->products[] = ['product' => $product, 'quantity' => $quantity];
	}

	public function getPrice()
	{
		$priceTotal = 0;
		for ($i = 0; $i < count($this->products); $i++) {
			$priceTotal += $this->products[$i]['product']->getPrice() * $this->products[$i]['quantity'];
		}
		return $priceTotal;
	}

	public function describe()
	{
		for ($i = 0; $i < count ($this->products); $i++) {
			echo "<div>".$this->products[$i]['product']->getName() . " - " . $this->products[$i]['product']->getPrice() . " - " . $this->products[$i]['quantity'] . "</div>";
		}
	}
}

class Product
{
	public $name;
	public $price;
	
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
