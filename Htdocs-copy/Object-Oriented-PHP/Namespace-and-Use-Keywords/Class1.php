<?php
    namespace Sessao1;

    use Sessao2\Class2 as c2;

    class Class1{
        public function __construct(){
            // new Class2;
            // new \Sessao2\Class2;
            new c2();
            echo "Class1 instanciated.<br/>";
        }
    }
?>