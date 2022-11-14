<?php
    $pdo = new PDO('mysql:host=localhost;dbname=myDB1','root','');
        
    $id = 3;
    
    $sql = $pdo->prepare("DELETE FROM `clientes`  WHERE id=?");
    
    if($sql->execute([$id])){
        echo "Meu cliente foi deletado com sucesso!<br/>";
    }
    

?>