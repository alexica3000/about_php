<?php

require "cat.php";
require "factory.php";

use CatFactory\CatFactory;

$cats = [];
$cats[] = CatFactory::createBlack8YearsOldCat('Bella');
$cats[] = CatFactory::createBlackCat('Luna');
$cats[] = CatFactory::createWhite4YearsOldCat('Lily');
$cats[] = CatFactory::createWhiteCat('Lucy');
$cats[] = CatFactory::createReddish2YearsOldCat('Kitty');
$cats[] = CatFactory::createReddishCat('Callie');
$cats[] = CatFactory::createStriped1YearsOldCat('Nala');
$cats[] = CatFactory::createStripedCat('Zoe');

print_r($cats);
