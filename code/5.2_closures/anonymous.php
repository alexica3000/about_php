<?php

interface Formatter
{
    public function format($value);
}

function format($value, Formatter $formatter) {
    echo $formatter->format($value) . PHP_EOL;
}

$tmpClass = new class implements Formatter
{
    public function format($value)
    {
        return sprintf('Price: %01.10f$', $value);
    }
};

format(10, $tmpClass);
