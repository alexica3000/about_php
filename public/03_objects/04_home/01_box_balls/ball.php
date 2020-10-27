<?php

namespace BoxBalls;

class Ball
{
    private static int $count = 0;

    public function increase()
    {
        return static::$count++;
    }

    public function getCount()
    {
        return static::$count;
    }
}
