<?php

require '4domna.php';

echo "<div><h1>Blast - polymorphism</h1></div>";

use App\Domna\Forge;
use App\Domna\Pianino;
use App\Domna\Head;
use App\Domna\Book;
use App\Domna\Phone;
use App\Domna\Computer;

$forge1 = new Forge;

$pianino = new Pianino;
$head = new Head;
$book = new Book;
$phone = new Phone;
$computer = new Computer;

$forge1->burn($pianino);
echo "<br>";
$forge1->burn($head);
echo "<br>";
$forge1->burn($book);
echo "<br>";
$forge1->burn($phone);
echo "<br>";
$forge1->burn($computer);
