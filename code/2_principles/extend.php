<?php

class Pet
{
	public function walk()
	{
		echo "top-top-top".PHP_EOL;
	}

	public function sleep()
	{
		echo "zzzzz".PHP_EOL;
	}
	
	public function say()
	{
		
	}
}

class Cat extends Pet
{
	public function say()
	{
		echo 'Miau' . PHP_EOL;
	}

	public function catchMouse()
	{
		echo "The cat catches mice.".PHP_EOL;
	}
}

class Dog extends Pet
{
	public function say()
	{
		echo "Ham-ham".PHP_EOL;
	}
}

class Horse extends Pet
{
	public function walk()
	{
		echo "Tighidik".PHP_EOL;
	}

	public function say()
	{
		echo "Igo-go".PHP_EOL;
	}
}

class Tiger extends TalkativeCat
{
	public function say()
	{
		echo 'Rrrrr...'.PHP_EOL;
	}
}

class TalkativeCat extends Cat
{
	public function walk()
	{
		self::say();
		parent::walk();
	}

	public function sleep()
	{
		$this->say();
		parent::sleep();
	}
}

$cat = new Cat();
$dog = new Dog();
$horse = new Horse();
$tiger = new Tiger();
$talkativeCat = new TalkativeCat();

// $talkativeCat->walk();
// $talkativeCat->sleep();

$tiger->walk();
// $tiger->sleep();
// $tiger->say();
// $tiger->catchMouse();

// $cat->walk();
// $cat->sleep();
// $cat->say();
// $cat->catchMouse();

// $dog->walk();
// $dog->sleep();
// $dog->say();

// $horse->walk();
// $horse->sleep();
// $horse->say();
