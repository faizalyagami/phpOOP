<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\One\{Conflict as Conflict1, Dummy as dump, Sample};
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict1->hello("Faisal") . PHP_EOL;
$dummy = new dump();
$sample = new Sample();

help() . PHP_EOL;

echo APP . PHP_EOL;

?>