<?php

namespace App\Ftoy;

class ToyFactory
{
	public $name, $price;

	public function __construct($name)
	{
		$this->createToy($name);
		$this->name = $this->newToy->name;
		$this->price = $this->newToy->price;
	}
	
	public function createToy($name)
	{
		$this->newToy = new Toy($name, rand(500,2000));
		return $this->newToy;
	}
}

class Toy
{
	public $name, $price;
	
	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
}
