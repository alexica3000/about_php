<?php

abstract class Food
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function getReceipt();
    abstract public function getIngredientsCount();
}

class Chocolate extends Food
{
    public function getReceipt()
    {
        return 'milk and coffee';
    }

    public function getIngredientsCount()
    {
        return 2;
    }
}

class BakedApple extends Food
{
    private $ingredients = ['apple'];

    public function __construct()
    {
        parent::__construct('Baked Apple');
    }

    public function getReceipt()
    {
        return implode(',', $this->ingredients);
    }

    public function getIngredientsCount()
    {
        return count($this->ingredients);
    }
}

function describeFood(Food $food)
{
    echo 'For prepared ' . $food->getName() . ' we will need: ' . $food->getReceipt();
}

$chocolate = new Chocolate('Alpen Gold');
$apple = new BakedApple();

describeFood($apple);
