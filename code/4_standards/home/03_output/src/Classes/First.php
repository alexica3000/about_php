<?php

namespace App\Classes;

use App\Interfaces\Formatter;

class First
{
    public function format($string)
    {
        return ucfirst($string) . PHP_EOL;
    }
}
