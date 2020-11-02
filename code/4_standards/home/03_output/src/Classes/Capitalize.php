<?php

namespace App\Classes;

use App\Interfaces\Formatter;

class Capitalize implements Formatter
{
    public function format($string)
    {
        return strtoupper($string) . PHP_EOL;
    }
}
