<?php
    $pdo = new PDO("mysql: host=localhost ; dbname=db_teste", "root", "");
    $sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome desc");
    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo "<hr/>";
    }
?>