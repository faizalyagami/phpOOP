<?php

    class Programmer {
        public string $name;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

    }

    class BackEndProgrammer extends Programmer {

    }

    class FrontEndProgrammer extends Programmer {

    }

    //kode polymorpshim
    class Company {
        public Programmer $programmer;
    }

    // function sayHelloProgrammer(Programmer $programmer) {
    //     echo "Hello Programmer $programmer->name". PHP_EOL;
    // }

    function sayHelloProgrammer(Programmer $programmer) {
        if ($programmer instanceof Programmer) {
            echo "Hello Programmer $programmer->name" . PHP_EOL;
        } else if ($programmer instanceof BackEndProgrammer) {
            echo "Hello Backendprogrammer $programmer->name". PHP_EOL;
        } else if ($programmer instanceof FrontEndProgrammer) {
            echo "Hello Frontendprogrammer $programmer->name". PHP_EOL;
        }
    }
?>