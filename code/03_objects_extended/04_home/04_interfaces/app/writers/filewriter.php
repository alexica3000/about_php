<?php

namespace App\Writers;

use App\Interfaces\Writer;

class FileWriter implements Writer
{
    public function write(array $data)
    {
        file_put_contents('file.txt', $data);
    }
}
