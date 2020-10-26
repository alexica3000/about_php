<?php

class Time
{
    private $hours;
    private $minutes;

    public function __construct($hours, $minutes)
    {
        $this->hours = $hours;
        $this->minutes = $minutes;
    }

    public static function fromString($value)
    {
        list($hours, $minutes) = explode($value, ':');

        return new self($hours, $minutes);
    }

    public static function midnight()
    {
        return new self(1, 0);
    }

    public function getHours()
    {
        return $this->hours;
    }
}

$midnight = Time::midnight();

echo $midnight->getHours();
