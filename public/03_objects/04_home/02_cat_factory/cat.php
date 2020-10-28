<?php

namespace CatFactory;

class Cat
{
    private string $name;
    private string $color;
    private int $age;

    public function __construct(string $name, string $color, int $age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }
}
