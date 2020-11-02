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

	function rollCall()
	{
		foreach($this->animals as $animal) {
			echo $animal->say();
		}
	}
}

class BirdFarm extends Farm
{
	public function addAnimal(Animal $animal)
	{
		$this->animals[] = $animal;
		$animal->walk();
		$this->showAnimalsCount();
	}
	
	public function showAnimalsCount()
	{
		echo "<div>Птиц на ферме: " . count($this->animals) . "</div>";
	}
}

class Animal
{
	public function say()
	{

	}

	public function walk()
	{
		
	}
}

class Bird extends Animal
{
	public function tryToFly()
	{
		echo "<div>Вжих-Вжих-топ-топ</div>";
	}

	public function walk()
	{
		$this->tryToFly();
	}
}

class Hoof extends Animal
{
	public function walk()
	{
		echo "<div>топ-топ</div>";
	}
}

class Cow extends Hoof
{
	public function say()
	{
		echo "<div>Му-у-у</div>";
	}
}

class Pig extends Hoof
{
	public function say()
	{
		echo "<div>Хрю-хрю</div>";
	}
}

class Chicken extends Bird
{
	public function say()
	{
		echo "<div>Куд-кудах</div>";
	}
}

class Goose extends Bird
{
	public function say()
	{
		echo "<div>Га-га-га</div>";
	}
}

class Turkey extends Bird
{
	public function say()
	{
		echo "<div>Кха-кха-кха</div>";
	}
}

class Horse extends Hoof
{
	public function say()
	{
		echo "<div>И-го-го</div>";
	}
}

class Farmer
{
	public function addAnimal(Farm $farm, Animal $animal)
	{
		$farm->addAnimal($animal);
	}

	function rollCall(Farm $farm)
	{
		$farm->rollCall();
	}
}
