<?php

namespace App\Converters;

use App\Interfaces\Converter;

class TrimConverter implements Converter
{
    public function convert($item)
    {
        return trim($item);
    }
}
