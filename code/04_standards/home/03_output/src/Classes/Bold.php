<?php

namespace App\Classes;

use App\Interfaces\Renderable;

class Bold implements Renderable
{
    public function render($string)
    {
        return '<b>' . $string . '</b>' . PHP_EOL;
    }
}
