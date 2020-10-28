<?php

namespace App\Readers;

use App\Interfaces\Reader;

class ArrayReader implements Reader
{
    private $arr = ['ban','age','steak','feel','embox','lung','chas'];

    public function read(): array
    {
        return $this->arr;
    }
}
