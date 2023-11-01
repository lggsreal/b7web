<?php
    $pdo = new PDO("mysql: host=localhost;dbname=db_teste", "root", "");
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $info = $sql->fetchAll();

    foreach($info as $key => $value){
        echo $value['nome'];
        echo " | ";
        echo $value['nome_cargo'];
        echo "<hr/>";
    }
?>