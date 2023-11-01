<?php
//Exemplo 1:
$pdo = new PDO("mysql: host=localhost ; dbname=modulo_7" , "root", "");

$sql = $pdo->prepare("SELECT * FROM categorias");
$sql->execute();

$info = $sql->fetchAll();

foreach ($info as $key => $value) {
    echo "Exibindo categoria de: " . $value['nome'];
    echo "<br/>";
}

?>