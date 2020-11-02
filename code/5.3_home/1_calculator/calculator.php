<?php

class Calculator
{
    public static function calculate($number1, $number2, callable $callback)
    {
        return call_user_func_array($callback, [$number1, $number2]);
    }
}

class Operation
{
    public static function multiply($number1, $number2)
    {
        return $number1 * $number2;
    }

    public static function divide($number1, $number2)
    {
        return $number1 / $number2;
    }
}

$add = function($number1, $number2) {
    return $number1 + $number2;
};

function subtract($number1, $number2)
{
    return $number1 - $number2;
}

$operation = new Operation();

$callbacks = [
    'add'      => $add,
    'subtract' => 'subtract',
    'multiply' => ['Operation', 'multiply'],
    'divide'   => [$operation, 'divide']
];

echo '<pre>';
foreach ($callbacks as $callback) {
    echo Calculator::calculate(5, 10, $callback) . PHP_EOL;
}
echo '<hr>';
foreach ($callbacks as $callback) {
    echo Calculator::calculate(3, 4, $callback) . PHP_EOL;
}

echo '</pre>';
