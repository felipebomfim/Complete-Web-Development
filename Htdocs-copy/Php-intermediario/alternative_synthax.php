<?php
    // Learning a new PHP syntax

    //Doing the old way

    $nome = "Felipe";

    if($nome === "Felipe"){
        echo "O nome é Felipe <br/>";
    }

    // Doing the new way
    if ($nome === "Felipe"):
        echo "O nome é Felipe (de novo) <br/>";
    endif;

    //Doing the old way

    $contador = 0;
    while ($contador < 10){
        echo "Oi <br/>";
        $contador++;
    }
    echo "<hr>";
    //Doing the new way


    $contador = 0;
    while ($contador < 10):
        echo "Oi <br/>";
        $contador++;
    endwhile;
?>
