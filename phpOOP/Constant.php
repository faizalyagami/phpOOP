<?php
    
    require_once"data/Person.php";

    define("APPLICATION", "PHP OOP");
    const APP_VERSION = "1.0.0.1";

    echo APPLICATION . PHP_EOL;
    echo APP_VERSION . PHP_EOL;

    echo Person::AUTHOR . PHP_EOL;


?>