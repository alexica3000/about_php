<?php

set_exception_handler(function (Throwable $e) {
    echo 'Throwable error...' . $e->getMessage() . PHP_EOL;
});

class BadValueException extends InvalidArgumentException
{

}

class TooBigValueException extends BadValueException
{

}

class NegativeValueException extends BadValueException
{

}

function arithmeticOperation($a, $b) {
    if ($a < 0 || $b < 0) {
        throw new NegativeValueException('a < 0 OR b < 0');
    }

    if ($a <= $b) {
        throw new TooBigValueException('a <= b');
    }

    if ($b == 0) {
        throw new InvalidArgumentException('b === 0');
    }

    return $a / $b;
}

$values = [
    ['a' => 0, 'b' => 2],
    ['a' => -1, 'b' => -3],
    ['a' => 10, 'b' => 0],
    ['a' => 3, 'b' => 1]
];

echo '<pre>';

foreach ($values as $value) {
    try {
        try {
            echo 'a = ' . $value['a'] . ' b = ' . $value['b'] . '   ';
            $c = arithmeticOperation($value['a'], $value['b']);
            echo 'Result: ' . $c . PHP_EOL;
        } catch (BadValueException $e) {
            echo 'Problem with numbers: ' . $e->getMessage() . PHP_EOL;
        }
    } catch (Exception $e) {
        echo 'Error log: ' . $e->getMessage() . PHP_EOL;
    }
}

echo '</pre>';

echo 'THE END';
