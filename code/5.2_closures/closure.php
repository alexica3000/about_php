<?php

class ClosureExample
{
    private int $value = 0;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    private function getValue()
    {
        return $this->value;
    }

    public function formatValue(Closure $closure)
    {
        return $closure->call($this);
    }
}

$formater = function() {
    return sprintf('Price: %01.2f$', $this->getValue());
};

$example  = new ClosureExample(5);
echo $example->formatValue($formater);
