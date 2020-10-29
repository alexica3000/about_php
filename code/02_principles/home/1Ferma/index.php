<?php

require '1farm.php';

echo "<div><h1>Farm - abstraction</h1></div>";

use App\Ranch\Farm;
use App\Ranch\Cow;
use App\Ranch\Pig;
use App\Ranch\Chicken;

$newfarm = new Farm();
$newfarm->addAnimal(new Cow);
$newfarm->addAnimal(new Pig);
$newfarm->addAnimal(new Pig);
$newfarm->addAnimal(new Chicken);

echo "<br>";

$newfarm->rollCall();



