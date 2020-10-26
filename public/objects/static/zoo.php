<?php

class Zoo
{
    protected static $animalsCount = 0;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function getAnimalsCount()
    {
        return self::$animalsCount;
    }

    public function addAnimal()
    {
        self::$animalsCount++;
    }

    public static function hasAnimals()
    {
        return self::getAnimalsCount() > 0;
    }

    public static function describeZoo()
    {
        echo 'In zoo ' . self::getName() . ' are ' . self:: getAnimalsCount() . ' animals.';
    }

    public function getName()
    {
        return $this->name;
    }
}


