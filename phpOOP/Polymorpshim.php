<?php

require_once "data/Programmer.php";

// $company = new Company();
// $company->programmer = new Programmer("Faisal");
// var_dump($company);

// $company->programmer = new BackEndProgrammer("Faqih");
// var_dump($company);

// $company->programmer = new FrontEndProgrammer("Humaira");
// var_dump($company);

sayHelloProgrammer(new Programmer("Faisal"));
sayHelloProgrammer(new BackEndProgrammer("Faqih"));
sayHelloProgrammer(new FrontEndProgrammer("Humaira"));

?>