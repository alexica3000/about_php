<?php

namespace App;

class Manager
{
    public function place($item)
    {
        if ($item instanceof Papers) {
            echo '<div>Put ' . $this->getClassName($item) . ' on the table</div>';
        } elseif ($item instanceof Instrument) {
            echo '<div>Removed ' . $this->getClassName($item) . ' inside the table</div>';
        } else {
            echo '<div>Threw out ' . $item . ' into trash</div>';
        }
    }

    private function getClassName($item)
    {
        $name = get_class($item);

        return (substr($name, strrpos($name, '\\') + 1));
    }
}
