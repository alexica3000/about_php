<?php

class OverloadProperties
{
    private $data = [];

    public function __get($name)
    {
        return $this->data[$this->convertName($name)];
    }

    public function __set($name, $value)
    {
        $this->data[$this->convertName($name)] = $value;
    }

    public function __isset($name)
    {
        return array_key_exists($this->convertName($name), $this->data);
    }

    public function __unset($name)
    {
        if (array_key_exists($this->convertNametrtolower($name), $this->data))
        {
            unset($this->data[$this->convertName($name)]);
        }
    }

    private function convertName($name)
    {
        return strtolower($name);
    }
}

$overload = new OverloadProperties();
$overload->test = 'new test value1';
$overload->TEST = 'second test value';

echo $overload->test . PHP_EOL;
echo $overload->TEST . PHP_EOL;

echo (isset($overload->test) ? 'yes' : 'no') . PHP_EOL;
echo (isset($overload->TEST) ? 'yes' : 'no') . PHP_EOL;
