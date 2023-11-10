<?php
    $pdo = new PDO("mysql: host=localhost;dbname=modulo_7", "root","");
    $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE momento_registro BETWEEN '2023-10-26' AND '2023-10-27'");
    $sql->execute();

    $info = $sql->fetchAll();

    foreach($info as $key => $value){
        echo $value['momento_registro'];
        echo "<hr/>";
    }
?>