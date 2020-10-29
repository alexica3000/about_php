<?php

class Cook
{
	public function makeFood()
	{
		switch ($this->whatToCook())
		{
			case 'Candy':
				return new Candy();
			case 'Soup':
				return new Soup();
			case 'Pie':
				return new Pie();
		}
	}

	public function whatToCook()
	{
		$menu = ['Candy', 'Soup', 'Pie'];
		$randInt = rand(0, count($menu) - 1);

		return $menu[$randInt];
	}
}

class Food
{
	public function eat()
	{

	}
}

class HungryStudent
{
	public function eatFood(Food $food)
	{
		$food->eat();
	}
}

class Candy extends Food
{

}

class Soup extends Food
{

}

class Pie extends Food
{

}

$cook = new Cook();
$student1 = new HungryStudent();
$student2 = new HungryStudent();

$student1->eatFood($cook->makeFood());
$student2->eatFood($cook->makeFood());
