<?php

namespace App\Hungry;

class HungryCat
{
	public $name;
	public $colour;
	public $favoriteFood;
	
	public function __construct($name, $colour, $favoriteFood)
	{
		$this->name = $name;
		$this->colour = $colour;
		$this->favoriteFood = $favoriteFood;
	}

	public function eat($food)
	{
		echo "Hungry cat $this->name, special features: color- $this->colour, ate $food";
		if ($food == $this->favoriteFood) {
			echo " and purred 'mrrrrr' from his favorite food<br>";
		} else {
			echo "<br>";
		}
	}
}
