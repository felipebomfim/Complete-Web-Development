<?php
    class Pessoa {
        private $nome = 'Felipe';
        private $idade = '24';
        private $peso = '90Kg';

        public function crescer (){
            $this -> comer();
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo';
        }
    }

    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
?>