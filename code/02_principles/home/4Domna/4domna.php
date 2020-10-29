<?php

namespace App\Domna;

class Forge
{
	public function burn($object)
	{
		$flame = $object->burn();
		echo $flame->render((string)$object) . PHP_EOL;
	}
}

class BlueFlame
{
	public function render($name)
	{
		return $name . " горит голубым огнем";
	}
}

class RedFlame
{
	public function render($name)
	{
		return $name . " горит красным огнем";
	}
}

class Smoke
{
	public function render($name)
	{
		return $name . " лишь задымился";
	}
}

class Pianino
{
	public function burn()
	{
		return new BlueFlame;
	}

	public function __toString()
	{
		return get_class($this) . PHP_EOL;
	}
}

class Head
{
	public function burn()
	{
		return new Smoke;
	}

	public function __toString()
	{
		return get_class($this) . PHP_EOL;
	}
}

class Book
{
	public function burn()
	{
		return new RedFlame;
	}

	public function __toString()
	{
		return get_class($this) . PHP_EOL;
	}
}

class Phone
{
	public function burn()
	{
		return new Smoke;
	}

	public function __toString()
	{
		return get_class($this) . PHP_EOL;
	}
}

class Computer
{
	public function burn()
	{
		return new Smoke;
	}

	public function __toString()
	{
		return get_class($this) . PHP_EOL;
	}
}
