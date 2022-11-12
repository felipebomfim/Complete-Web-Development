<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <?php
        
        if (isset($_POST['acao'])){
            // echo $_POST['numero1']+$_POST['numero2'];
            foreach ($_POST['valor'] as $key => $value) {
                echo "$key => $value";
                echo "<br/>";
            }
        }
    ?>    

    <form method="post">
        <input type="checkbox" name="valor[]" value='10'/> 10
        <input type="checkbox" name="valor[]" value='20'/> 20
        <input type="checkbox" name="valor[]" value='30'/> 30
        <input type="checkbox" name="valor[]" value='40'/> 40
        <input type="submit" name="acao" value="Enviar"/>


    </form>
    
</body>
</html>