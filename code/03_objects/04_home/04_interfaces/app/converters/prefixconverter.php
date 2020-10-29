<?php

namespace App\Converters;

use App\Interfaces\Converter;

class PrefixConverter implements Converter
{
    public function convert($item)
    {
        return 'new_' . $item;
    }
}
