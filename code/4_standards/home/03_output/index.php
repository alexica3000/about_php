<?php

use App\Classes\Display;

require_once 'autoload.php';

$strings = [
    'prevalence',
    'brag',
    'host',
    'knife',
    'dollar',
    'abuse',
    'lend',
    'opposition',
    'dragon',
    'district',
    'apathy',
    'pack',
    'graduate',
    'user',
    'kneel'
];

$objects = [
    'bold'       => 'App\Classes\Bold',
    'capitalize' => 'App\Classes\Capitalize',
    'first'      => 'App\Classes\First',
    'italic'     => 'App\Classes\Italic',
    'other'      => 'App\Classes\Other',
];

$display = new Display();

foreach ($strings as $str) {
    foreach ($objects as $key => $object) {
        $display->show(new $object(), $str);
        echo '<br>';
    }
    echo '<hr>';
}
