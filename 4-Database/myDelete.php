<?php
    $pdo = new PDO('mysql:host=localhost;dbname=myDB1','root','');
    if (isset($_POST['id'])){
        
        $id = $_POST['id'];
        
        $sql = $pdo->prepare("DELETE FROM `clientes`  WHERE id=$id");
        
        if($sql->execute()){
            echo "Meu cliente foi deletado com sucesso!<br/>";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro no banco</title>
</head>
<body>
    <form method="post">
        <input type="text" name="id" placeholder='id a ser deletado' required />
        <!-- <input type="datetime-local" name="momento_registro" id="momento_registro" required></input> -->
        <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>