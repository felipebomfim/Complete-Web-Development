<?php
    include('Class1.php');

    $teste = new Test('Felipe',23);

    $nome = $teste->getName();

    $idade = $teste->getAge();

    echo "Seu nome é $nome <br/>";
    
    echo "Sua idade é $idade <br/>";

?>