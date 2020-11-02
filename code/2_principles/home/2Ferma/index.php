<?php

require '2farm.php';

use App\Ranch\Farm;
use App\Ranch\Farmer;
use App\Ranch\BirdFarm;
use App\Ranch\Cow;
use App\Ranch\Pig;
use App\Ranch\Chicken;
use App\Ranch\Turkey;
use App\Ranch\Goose;

echo "<div><h1>Ферма - абстракция</h1></div>";

$farm = new Farm;
$farmer = new Farmer;
$birdfarm = new BirdFarm;

$farmer->addAnimal($farm, new Cow);
$farmer->addAnimal($farm, new Pig);
$farmer->addAnimal($farm, new Pig);
$farmer->addAnimal($birdfarm, new Chicken);
$farmer->addAnimal($birdfarm, new Turkey);
$farmer->addAnimal($birdfarm, new Turkey);
$farmer->addAnimal($birdfarm, new Turkey);
$farmer->addAnimal($birdfarm, new Goose);

echo "<br>";

$farmer->rollCall($farm);

echo "<br>";

$farmer->rollCall($birdfarm);
