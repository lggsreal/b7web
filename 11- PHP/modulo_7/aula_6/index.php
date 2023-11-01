<?php
    $pdo = new PDO("mysql: host=localhost ; dbname=modulo_7" , "root", "");

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id = 138 ");
    $sql->execute();
?>