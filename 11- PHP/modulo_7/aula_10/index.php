<?php
    $pdo = new PDO("mysql: host=localhost ; dbname=modulo_7" , "root", "");

    //Duas tabelas juntas : INNER JOIN
    $sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categorias` ON `posts` . `categoria_id` =  `categorias` . `id`");
    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<pre/>";
    print_r($info);
    echo "</pre>";
?>