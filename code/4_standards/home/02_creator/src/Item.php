<?php

namespace App;

abstract class Item
{
    public string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo '<div>I am ' . $this->name . '</div>';
    }
}
