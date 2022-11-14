<?php
    include ("interface1.php");

    class Test implements Interface1 {
        public function printOnScreen($par){
            echo "Olá, $par!";
        }
    }

    $test = new Test;

    $test->printOnScreen("Felipe");
?>
