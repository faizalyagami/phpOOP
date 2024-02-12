<?php

    class Manager {

        //properties $name
        var string $name;
        var string $title;

        public function __construct(string $name = "",string $title = "Manager")
        {
            $this->name = $name;
            $this->title = $title;
        }

        function sayHello(string $name): void {
            echo "Hi $name, i'am is $this->title my name is $this->name" . PHP_EOL;
        }
    }

    class VicePresident extends Manager {
        public function __construct(string $name = "")
        {
            //tidak wajib, tapi disarankan
            parent::__construct($name, "VP");
        }

        function sayHello(string $name): void {
            echo "Hi $name, i'am is $this->title my name is $this->name" . PHP_EOL;
        }
    }

?>