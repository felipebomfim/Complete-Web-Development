<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página HTML </title>
</head>
<body>
    <?php
        // $nome = 'Felipe';
        define('DEFAULT_NAME','Felipe');
        
        $nome = array('Guilherme','João','Felipe');

        echo "Olá <br/>".DEFAULT_NAME."!\n";
        $idade = 25;
        $metade = floor($idade/2);
        echo "A metade da sua idade é de $metade anos<br/>";
        $x = '1';
        $y = '2';
        echo $y-$x;
    ?>
</body>
</html>