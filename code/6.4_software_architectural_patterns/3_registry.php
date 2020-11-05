<?php

class Register
{
    private static $data = [];

    public static function set(string $key, $value)
    {
        self::$data[$key] = $value;
    }

    public function get(string $key, $defaultValue = null)
    {
        return self::$data[$key] ?? $defaultValue;
    }
}
