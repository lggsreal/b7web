<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nome">
        <input type="text" name="sobrenome">
        <input type="submit" name="acao">
    </form>    
</body>
</html>


<?php

date_default_timezone_set('America/Sao_Paulo');

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('y-m-d h:m:i');

     //Conectando ao banco de dados:
    //("nº do servidor; nome_da_tabela" , "adm_usuário", "adm senha")
    $pdo = new PDO('mysql:host=localhost; dbname=modulo_7', 'root', '');


    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?,?,?) ");
    $sql->execute(array($nome, $sobrenome, $momento_registro));

    echo 'cliente inserido com sucesso!';
};

   
?>