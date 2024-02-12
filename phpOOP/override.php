<?php

    require "data/Manager.php";

    $manager = new Manager();
    $manager->name = "Faisal";
    $manager->sayHello("John");

    $vp = new VicePresident();
    $vp->name = "Faqih";
    $vp->sayHello("John")


?>