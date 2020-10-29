<?php

namespace App\Ranch;

class Farm
{
	public $animals = [];

	public function addAnimal(Animal $animal)
	{
		$this->animals[] = $animal;
		$animal->walk();
	}

	public function rollCall()
	{
		shuffle($this->animals);
		foreach($this->animals as $animal){
			echo $animal->say();
		}
	}
}

class Animal
{
	public function say()
	{

	}

	public function walk()
	{
		echo "<div>топ-топ</div>";
	}
}

class Cow extends Animal
{
	public function say()
	{
		echo "<div>Му-у-у</div>";
	}
}

class Pig extends Animal
{
	public function say()
	{
		echo "<div>Хрю-хрю</div>";
	}
}

class Chicken extends Animal
{
	public function say()
	{
		echo "<div>Куд-кудах</div>";
	}
}
