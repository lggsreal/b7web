<?php
    date_default_timezone_set("America/Belem");
    date("d/m/y h:i:s");
    $pdo = new PDO("mysql: host=localhost ; dbname=modulo_7", "root", "");

    if(isset($_POST['acao'])){
        $id = $_POST['id_del'];
        
        $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id = ?");
        $sql->execute(array($id));
    }
?>