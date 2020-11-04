<?php

abstract class Handler
{
    private $next = null;

    public  function link(Handler $next)
    {
        $this->next = $next;

        return $this->next;
    }

    public function handle($request)
    {
        if (!is_null($this->next)) {
            return $this->next->handle($request);
        }

        return false;
    }
}

class Operator extends Handler
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function handle($request)
    {
        if ($this->isBusy()) {
            echo 'The operator ' . $this->name . ' is busy.' . PHP_EOL;

            return parent::handle($request);
        }

        echo 'Request ' . $request . ' is loaded by ' . $this->name . PHP_EOL;

        return true;
    }

    private function isBusy()
    {
        return (bool)rand(0, 4);
    }
}

class BusyHandler extends Handler
{
    private $request = null;

    public function handle($request)
    {
        if ($this->request == $request) {
            echo 'All operators are busy.' . PHP_EOL;

            return false;
        }

        $this->request = $request;

        if ($result = parent::handle($request)) {
            return $result;
        }

        return true;
    }
}

$busyHandler = new BusyHandler();
$busyHandler
    ->link(new Operator('#1'))
    ->link(new Operator('#2'))
    ->link(new Operator('#3'))
    ->link($busyHandler)
;

echo '<pre>';
for ($i = 0; $i < 3; $i++)
{
    $result = $busyHandler->handle('request ' . $i);

    if (!$result) {
        echo 'The request is send on up level.' . PHP_EOL;
    }
}
echo '</pre>';
