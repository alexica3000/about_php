<?php

namespace App;

class Creator
{
    public static function create($name)
    {
        $class = '\App\\' . ucfirst($name);

        if (class_exists($class)) {
            return new $class($name);
        }

        return new EmptyItem($name);
    }
}
