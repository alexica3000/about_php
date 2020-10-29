<?php

namespace CatFactory;

class CatFactory
{
    public static function createBlack8YearsOldCat(string $name)
    {
        return new Cat($name, 'black', 8);
    }

    public static function createBlackCat(string $name)
    {
        return new Cat($name, 'black', 0);
    }

    public static function createWhite4YearsOldCat(string $name)
    {
        return new Cat($name, 'white', 4);
    }

    public static function createWhiteCat(string $name)
    {
        return new Cat($name, 'white', 0);
    }

    public static function createReddish2YearsOldCat(string $name)
    {
        return new Cat($name, 'reddish', 2);
    }

    public static function createReddishCat(string $name)
    {
        return new Cat($name, 'reddish', 0);
    }

    public static function createStriped1YearsOldCat(string $name)
    {
        return new Cat($name, 'striped', 1);
    }

    public static function createStripedCat(string $name)
    {
        return new Cat($name, 'striped', 0);
    }
}
