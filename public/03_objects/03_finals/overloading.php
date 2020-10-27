<?php

class overloadMethods
{
    public function __call($name, $arguments)
    {
        if (strpos($name, 'say') === 0) {
            return $this->say($this->getWordsFromMethodName($name));
        }
    }

    public static function __callStatic($name, $arguments)
    {
        if (strpos($name, 'say') === 0) {
            return static::say(static::getWordsFromMethodName($name));
        }
    }

    private static function say($words)
    {
        return implode(' ', $words);
    }

    private static function getWordsFromMethodName($name)
    {
        $name = substr($name, 3);

        return explode('_', $name);
    }
}

$overload = new overloadMethods();
echo $overload->sayAll_is_good();
