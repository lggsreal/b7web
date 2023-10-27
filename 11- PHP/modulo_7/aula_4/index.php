<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nome">
        <input type="text" name="sobrenome">
        <input type="submit" name="acao">  
    </form>   
</body>
</html>
<?php
    date_default_timezone_set("America/Belem");
    $pdo = new PDO("mysql: host=localhost; dbname=modulo_7", "root", "");

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data = date('D/M/Y h:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
        $sql->execute(array($nome, $sobrenome, $data));

        echo "Parabéns! Cliente adicionado com sucesso. Horário: " . $data;

    }
?>