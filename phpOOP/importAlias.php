<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2;

help();

echo APP . PHP_EOL;

?>