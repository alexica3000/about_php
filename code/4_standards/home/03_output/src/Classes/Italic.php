<?php

namespace App\Classes;

use App\Interfaces\Renderable;

class Italic implements Renderable
{
    public function render($string)
    {
        return '<i>' . $string . '</i>' . PHP_EOL;
    }
}
