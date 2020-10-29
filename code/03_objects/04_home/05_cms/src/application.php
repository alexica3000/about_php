<?php

namespace App;

class Application
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        $action = $_SERVER['REQUEST_URI'];
        $this->router->dispatch($action);
    }
}
