<?php

    class Dog{
        public function __construct(){
            echo "Dog Class <br/>";
        }
    }

    class Cat{
        public function __construct(){
            echo "Cat Class <br/>";
        }
    }   

    class Animal{
        public static function build($class_name){
            if (class_exists($class_name))
                return new $class_name;
            else
                echo "Class doesn't exist.<br/>";
        }
    }

    Animal::build('Dog');
    Animal::build('Cat');
    Animal::build('asdas');
?>