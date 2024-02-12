<?php

require_once "data/Person.php";

$person = new Person("faisal","bandung");
$person->name="faisal";
$person->address = "bandung";
$person->country = "indonesia";

$person->sayHello("Faisal");

echo "Name: {$person->name}" . PHP_EOL;
echo "Address: {$person->address}". PHP_EOL;
echo "Country: {$person->country}". PHP_EOL;


?>