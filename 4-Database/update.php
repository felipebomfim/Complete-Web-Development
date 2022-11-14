<?php
    $pdo = new PDO('mysql:host=localhost;dbname=myDB1','root','');

    $id = 2;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='João',sobrenome='Dos Santos' WHERE nome='Joao'");

    if($sql->execute()){
        echo "Meu cliente foi atualizado com sucesso!<br/>";
    }