<?php
    function mostrarNome($idade, $nome="Felipe"){
        echo "<h2>Seu nome é $nome!</h2>";
        echo '<p>Sua idade é <b>'.$idade.' anos</b>.</p>';
    }

    mostrarNome(24);
?>