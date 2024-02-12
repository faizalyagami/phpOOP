<?php

require_once "data/conflict.php";
require_once "data/helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict = new Conflict();
$conflict2 = new \Data\Two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;

?>