<?php

namespace App\Ftoy;

class ToyFactory
{
	public function createToy($name)
	{
		return new Toy($name, rand(500, 2000));
	}
}

class Toy
{
	public $name;
	public $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
}
