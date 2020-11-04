<?php

final class Configuration
{
    private static $instance;
    private $configs = [];

    private function __construct()
    {

    }

    public static function getInstance() : Configuration
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function getConfig($key, $default = null)
    {
        return $this->configs[$key] ?? $default;
    }

    public function setConfig($key, $value)
    {
        $this->configs[$key] = $value;

        return $this;
    }
}

$config = Configuration::getInstance();
$config
    ->setConfig('user', 1)
    ->setConfig('is_admin', false)
    ->setConfig('last_login', time())
;
