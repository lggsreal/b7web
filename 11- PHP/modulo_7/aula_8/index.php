<?php
    $pdo = new PDO("mysql: host=localhost ; dbname=modulo_7", "root", "");

    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 2");
    $sql -> execute();

    $info = $sql->fetchAll();
    echo "<pre>";


    foreach ($info as $key => $value) {
        echo "Título: " . $value['titulo'];
        echo "<br/>";
        echo "Notícia: " . $value['conteudo'];
        echo "<hr/>";
    }

    //Puxando clientes:

    $sqlTwo = $pdo->prepare("SELECT * FROM clientes");
    $sqlTwo->execute();

    $infoTwo = $sqlTwo->fetchAll();
    echo "<pre>";

    foreach ($infoTwo as $value) {
        echo "<br/>";
        echo "Nome: " . $value['nome'];
        echo "<br/>";
        echo "Sobrenome: " . $value['sobrenome'];
        echo "<hr/>";
    }

    //Puxando os produtos:
    $pdoThree = new PDO("mysql: host=localhost; dbname=crm", "root", "");
    $sqlThree = $pdoThree->prepare("SELECT * FROM produtos");
    $sqlThree->execute();

    $infoThree = $sqlThree->fetchAll();

    foreach($infoThree as $values){
        echo "<br/>";
        echo $values['nome'];
        echo "<br/>";
        echo "<hr/>";
    }

    

?>