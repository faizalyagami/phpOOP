<?php

    require_once "data/Manager.php";

    $manager = new Manager();
    $manager->name = "Faisal";
    $manager->sayHello("Faqih") . PHP_EOL;

    $vp = new VicePresident();
    $vp->name = "Joko";
    $vp->sayHello("Ismi"). PHP_EOL;

?>