<?php

namespace App\Converters;

use App\Interfaces\Converter;

class AddEolConverter implements Converter
{
    public function convert($item)
    {
        return $item . PHP_EOL;
    }
}
