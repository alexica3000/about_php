<?php

require '3box.php';

use App\Box\Plane;
use App\Box\Engineer;
use App\Box\BlackBox;
use App\Box\AnotherPlane;

echo "<div><h1>Black Box - Encapsulation</h1></div>";

$plane1 = new Plane(new BlackBox);
$inginer1 = new Engineer;

$plane1->flyAndCrush();
$inginer1->takeBox($plane1);
$inginer1->decodeBox();

echo "<br>";

$plane2 = new AnotherPlane(new BlackBox);
$plane2->flyAndCrush();
$inginer1->takeBox($plane2);
$inginer1->decodeBox();
