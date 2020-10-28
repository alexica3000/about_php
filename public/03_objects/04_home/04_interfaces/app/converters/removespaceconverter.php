<?php

namespace App\Converters;

use App\Interfaces\Converter;

class RemoveSpaceConverter implements Converter
{
    public function convert($item)
    {
        return str_replace(' ', '', $item);
    }
}
