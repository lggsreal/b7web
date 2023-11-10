<?php
    $pdo = new PDO("mysql: host=localhost;dbname=db_teste", "root", "");
    $sql = $pdo->prepare("SELECT * FROM `clientes`");
    $sql->execute();

    $users = $sql->fetchAll();
    
    foreach($users as $key => $info){
        echo $info['nome'];
        echo "<hr/>";
    }
?>