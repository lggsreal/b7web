<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="text" name="sobrenome">
        <input type="submit" name="acao" value="Enviar!">
    </form>
</body>
</html>

<?php
    if(isset($_POST['acao'])){
        date_default_timezone_set("America/Belem");

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $moment = date('y/m/d h:I:s');
        
        //Abrindo banco de datos
        $PDO = new PDO('mysql:host=localhost; dbname=modulo_7', 'root', '');
        $SQL = $PDO->prepare('INSERT INTO `clientes` VALUES(null, ?, ?, ?)');
        $SQL->execute(array($nome, $sobrenome, $moment));

        echo "cliente inserido com sucesso!";
    }
?>