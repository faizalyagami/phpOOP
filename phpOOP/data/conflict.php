<?php

    namespace Data\One {
        class Conflict {
            function hello($name) {
                echo "hi $name, ini adalah class conflict";
            }
        }

        class Dummy {

        }

        class Sample {

        }
    }

    namespace Data\Two {
        class Conflict {
    
        }
    }

?>