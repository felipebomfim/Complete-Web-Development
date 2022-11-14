<?php
    final class Child extends Father{
        public function showHello(){
            echo "Hello World! <br/>";
            $this->testFunction();
        }
        //new showGoodbye

        public function showGoodbye(){
            echo "I'm not too good at Goodbyes! But ...</br>";

            parent::showGoodbye();
        }
    };

    class Father{
        protected function testFunction(){
            echo "This is a test function!<br/>";
        }

        public function showGoodbye(){
            echo "Goodbye World! <br/>";
        }
    };

    $dad = new Father();

    $dad->showGoodbye();

    $son = new Child();

    $son->showHello();

    // $son->testFunction(); //Error

    $son->showGoodbye();

?>