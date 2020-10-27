<?php

interface Walkable
{
    public function walk();
}

interface Sleepable
{
    public function sleep(int $seconds);
}

interface Animal extends Walkable, Sleepable
{
    public function say();
}

class Cat implements Animal
{
    public function walk()
    {
        echo 'it is walk...' . PHP_EOL;
    }

    public function sleep(int $seconds)
    {
        echo 'the cat is sleeping for ' . $seconds . ' seconds.' . PHP_EOL;
    }

    public function say()
    {
        echo 'Meaw...' . PHP_EOL;
    }
}

class Human implements Walkable
{
    public function walk()
    {
        echo 'the human walk... ' . PHP_EOL;
    }
}

function goForWalk(Walkable $walkable)
{
    $walkable->walk();
}

$cat = new Cat();
$human = new Human();
