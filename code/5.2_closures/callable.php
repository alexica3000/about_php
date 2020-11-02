<?php

/*
 * pseudotype callable
 * function call_user_func(callable $function, ...$parameter);
 * function call_user_func_array(callable $function, array $params);
 * function usort(array $array, callable $function);
 */

function test($name, callable $callback)
{
    echo "invoke: " . $callback($name) . PHP_EOL;
    echo 'user_func: ' . call_user_func_array($callback, [$name]) . PHP_EOL;
}

function simpleHello($name = '')
{
    return 'Simple Hello To: ' . $name;
}

class SayHello
{
    public static function helloStatic($name = '')
    {
        return 'Say hello to: ' . $name;
    }

    public function hello($name = '')
    {
        return 'Say hello to: ' . $name;
    }
}

echo '<pre>';
test('World', 'simpleHello');
test('Anonym', function ($name) {
    return 'Hello to: ' . $name . PHP_EOL;
});

$ob = new SayHello();

test('static', [SayHello::class, 'helloStatic']);
test('non-static', [$ob, 'hello']);

echo '</pre>';
