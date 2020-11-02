<?php

namespace App;

class EmptyItem extends Item
{
    public function show()
    {
        echo '<div>Class ' . $this->name . ' not found.</div>';
    }
}
