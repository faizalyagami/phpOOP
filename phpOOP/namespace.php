<?php

require_once "data/conflict.php";
require_once "data/helper.php";

$conflict1 = new \Data\One\Conflict;
$conflict2 = new \Data\Two\Conflict;

echo Helper\APPLICATION;
echo Helper\helpMe();

?>