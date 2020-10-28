<?php

namespace App\Writers;

use App\Interfaces\Writer;

class ShowWriter implements Writer
{
    public function write(array $data)
    {
        print_r($data);
    }
}
