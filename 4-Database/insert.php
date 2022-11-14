<?php
    date_default_timezone_set("America/Recife");
    $pdo = new PDO('mysql:host=localhost;dbname=myDB1','root','');
    if (isset($_POST['acao'])){    
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

        $sql->execute(array($nome,$sobrenome,$momento_registro));

        echo "Cliente inserido com sucesso!<br/>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro no banco</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required />
        <input type="text" name="sobrenome" required />
        <!-- <input type="datetime-local" name="momento_registro" id="momento_registro" required></input> -->
        <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>