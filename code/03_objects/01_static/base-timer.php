<?php

class BaseTimer
{
    public static $time = 0;

    public function tic()
    {
        self::$time++;
    }

    public static function getTime()
    {
        return self::$time;
    }
}

class TimerA extends BaseTimer
{
    public static $time = 0;
}

class TimerB extends BaseTimer
{

}

