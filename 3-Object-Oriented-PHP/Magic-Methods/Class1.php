<?php
    class Test 
    {
        private $name;
        private $age ;
        public function __construct($name,$age){
            $this->age = $age;
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function getAge(){
            return $this->age;
        }
    }
    
?>