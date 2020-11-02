<?php

use App\Brochure;
use App\Draft;
use App\Hammer;
use App\Manager;
use App\Pliers;

require_once 'autoload.php';

$manager = new Manager();
$manager->place(new Brochure());
$manager->place(new Hammer());
$manager->place('Clef');
$manager->place(new Pliers());
$manager->place(new Draft());
