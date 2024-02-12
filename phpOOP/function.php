<?php

require_once "data/Person.php";

$person = new Person("faisal", "bandung");
$person->name = "Faisal";
$person->address = "Bandung";

var_dump($person);

//$person->sayHello("Faqih");

$person2 = new Person("Humaira", null);
$person2->name="Humaira";
$person2->address=null;

var_dump($person2);
//$person->sayHello(null);

//$faisal->info();
?>