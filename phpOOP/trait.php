<?php

require_once "data/sayGoodBye.php";
use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Faisal");
$person->hello("Faqih");

$person->name = "Humaira";

//var_dump($person);

$person->run();
?>