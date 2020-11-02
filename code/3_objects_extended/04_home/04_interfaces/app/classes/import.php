<?php

namespace App\Classes;

use App\Interfaces\Converter;
use App\Interfaces\Reader;
use App\Interfaces\Writer;

class Import
{
    private Reader $reader;
    private Writer $writer;
    private array $converters;

    public function from(Reader $reader)
    {
        $this->reader = $reader;

        return $this;
    }

    public function to(Writer $writer)
    {
        $this->writer = $writer;

        return $this;
    }

    public function with(Converter $converter)
    {
        $this->converters[] = $converter;

        return $this;
    }

    public function execute()
    {
        $results = [];

        foreach ($this->converters as $converter) {
            $results = array_map(function ($item) use ($converter) {
                return $converter->convert($item);
            }, $this->reader->read());
        }

        $this->writer->write($results);
    }
}
