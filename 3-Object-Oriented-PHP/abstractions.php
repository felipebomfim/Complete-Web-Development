<?php
    abstract class Abstracted {
        public function func1(){
            echo "This is function one!<br/>";
        }

        abstract function func2(); //all child classes must implement this method;
    }
    // new Abstracted // Error!

    class Abstracter extends Abstracted{
        public function func2($a='nothing'){
            echo "This is function two! I received $a <br/>";
        }

    }

    $caller = new Abstracter();

    $caller -> func1();
    $caller -> func2(2);
?>