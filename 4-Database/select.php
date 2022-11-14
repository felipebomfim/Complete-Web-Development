<?php
    $pdo = new PDO('mysql:host=localhost;dbname=myDB1','root','');

    // $sql = $pdo->prepare('SELECT * FROM `posts` WHERE categoria_id=?');



    // $sql->execute([$_GET['categoria_id']]);

    // $info = $sql->fetchAll();



    // echo '<pre>';
    //     print_r($info);
    // echo '</pre>';

    // foreach ($info as $key => $value) {
    //     echo "Título: ".$value['titulo'];
    //     echo '<br/>';
    //     echo 'Conteúdo: <br/>';
    //     echo $value['conteudo'];
    //     echo '<hr>';
    // }

    // for ($i=0; $i < count($info);$i++){
    //     echo "Título: ".$info[$i]['titulo'];
    //     echo '<br/>';
    //     echo 'Conteúdo: <br/>';
    //     echo $info[$i]['conteudo'];
    //     echo '<hr>';
    // }

    // $sql = $pdo->prepare('SELECT * FROM `categorias`');



    // $sql->execute();

    // $info = $sql->fetchAll();

    // foreach ($info as $key => $categoria) {
    //     $categoria_id = $categoria['id'];
    //     echo "Exibindo posts de ".$categoria['nome']."<br/>";
    //     $sql = $pdo->prepare("SELECT * FROM `posts` WHERE categoria_id = $categoria_id");
    //     $sql->execute();
    //     $info_posts = $sql->fetchAll();
    //     foreach ($info_posts as $key => $value) {
    //         echo "Título: ".$value['titulo'];
    //         echo '<br/>';
    //         echo 'Conteúdo: <br/>';
    //         echo $value['conteudo'];
    //         echo '<hr>';
    //     }
    // }

    $sql = $pdo->prepare('SELECT *,`posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`');

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
        print_r($info);
    echo "</pre>";