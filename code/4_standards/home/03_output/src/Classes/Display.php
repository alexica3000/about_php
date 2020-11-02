<?php

namespace App\Classes;

use App\Interfaces\Formatter;
use App\Interfaces\Renderable;

class Display
{
    public static function show($formatter, $string)
    {
        if ($formatter instanceof Renderable) {
            echo $formatter->render($string);
        } elseif ($formatter instanceof Formatter || method_exists($formatter, 'format')) {
            echo $formatter->format($string);
        } else {
            echo $string;
        }
    }
}
