<?php

use App\Creator;

require_once 'autoload.php';

$names = [
    'ear',
    'cat',
    'love',
    'baseball',
    'night',
    'explanation',
    'hair',
    'beer',
    'recipe',
    'steak',
    'ladder',
    'examination',
    'country',
    'drawer',
    'technology'
];

foreach ($names as $name) {
    $item = Creator::create($name);
    $item->show();
}
