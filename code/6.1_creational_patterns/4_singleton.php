<?php

final class Singleton
{
    private static $instance;

    private function __construct()
    {

    }

    public static function getInstance() : Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}

$singletonObject = Singleton::getInstance();
$singletonObject1 = Singleton::getInstance();

