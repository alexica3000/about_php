<?php

namespace App\Readers;

use App\Interfaces\Reader;

class FileReader implements Reader
{
    public function read(): array
    {
        return file('file.txt');
    }
}
