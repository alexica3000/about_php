<?php

namespace BoxBalls;

class Ball
{
    public static int $count = 0;

    public function __construct()
    {
        static::$count++;
    }
}
