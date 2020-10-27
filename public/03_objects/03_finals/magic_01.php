<?php

class magicClass
{
    // constructor and destructor
    public function __construct()
    {

    }

    public function __destruct()
    {

    }

    // overloading methods
    // call when method of object doesn't exist
    public function __call($name, $arguments)
    {

    }

    // call when static method doesn't exist
    public static function __callStatic($name, $arguments)
    {

    }

    // for reading data from inaccessible (protected or private) or non-existing properties
    public function __get($name)
    {

    }

    // when writing data to inaccessible (protected or private) or non-existing properties
    public function __set($name, $value)
    {

    }

    // is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties
    public function __isset($name)
    {

    }

    // is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.
    public function __unset($name)
    {

    }

    // other magic methods
    // when is called serialize() (checks if the class has a function with the magic name __sleep())
    public function __sleep()
    {

    }

    // when is called unserialize() (checks if the class has a function with the magic name __wakeup())
    public function __wakeup()
    {

    }

    // convert obj to string, example when is call echo
    public function __toString()
    {
        return '';
    }

    // is called when a script tries to call an object as a function.
    public function __invoke()
    {

    }

    // is called by var_dump() when dumping an object to get the properties that should be shown.
    public function __debugInfo()
    {

    }

    // method is called for classes exported by var_export() since PHP 5.1.0
    public function __set_state()
    {

    }

    // for clone objects
    public function __clone()
    {

    }
}
