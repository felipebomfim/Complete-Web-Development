<?php
    include("Exemplo.class.php");
    $exemplo = new Exemplo();

    // $exemplo ->var1 = "Olá"; // Dá erro

    $exemplo->var2 = 'Guilherme';

    // echo $exemplo->var2;
    echo Exemplo::$var3;
?>