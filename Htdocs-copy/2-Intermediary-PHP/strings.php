<?php

    $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum tincidunt lacus, sed tempor felis volutpat ut. Suspendisse non leo quis arcu maximus egestas in vel elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis quis egestas diam. Integer euismod mauris eu pretium varius. Curabitur et ornare urna. Vestibulum consequat velit a massa consequat, id aliquam ex tempus. Fusce pellentesque tincidunt est id lobortis. Vivamus vel eleifend neque, a ultricies mauris. Mauris nibh metus, bibendum molestie suscipit eu, lobortis vitae dui.';

    echo substr($string,0,20);

    echo "<br/>";

    echo $nome = 'Felipe dos Santos Bomfim';

    echo "<br/>";


    $nomes = explode(" ", $nome);

    echo "<br/>";

    print_r($nomes);

    echo "<br/>";

    $nomes = implode(" ", $nomes);

    echo $nomes;

    $nome_grandao = "<h1> Felipão </h1>";
    // echo $nome_grandao;
    echo strip_tags($nome_grandao);

    echo "<br/>";

    echo htmlentities("<div></div>");

    echo "<br/>";

?>