<?php

namespace app;

spl_autoload_register();

use App\Classes\Import;
use App\Converters\AddEolConverter;
use App\Converters\PrefixConverter;
use App\Converters\RemoveSpaceConverter;
use App\Converters\TrimConverter;
use App\Readers\ArrayReader;
use App\Readers\FileReader;
use App\Writers\FileWriter;
use App\Writers\ShowWriter;

$import1 = new Import();
$import1->from(new ArrayReader())
    ->to(new FileWriter())
    ->with(new PrefixConverter())
    ->with(new AddEolConverter())
    ->execute();

$import2 = new Import();
$import2->from(new FileReader())
    ->to(new ShowWriter())
    ->with(new RemoveSpaceConverter())
    ->with(new TrimConverter())
    ->execute();
