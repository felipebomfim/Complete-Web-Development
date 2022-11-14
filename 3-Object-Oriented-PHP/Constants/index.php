<?php
    class ConstantClass{
        const CONST=100;
        function __construct(){
            echo 'Sua constante é '.(self::CONST).'<br/>';
        }
    }

    $classe = new ConstantClass;

