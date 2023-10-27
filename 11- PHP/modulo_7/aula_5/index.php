<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="id" placeholder="Digite aqui o id que você quer alterar as informações" required>
        <input type="text" name="nome" placeholder="Digite aqui o novo nome!" required>
        <input type="text" name="sobrenome" placeholder="Digite aqui o novo sobrenome" required>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>

<?php
    date_default_timezone_set("America/Sao_Paulo");
    $pdo = new PDO("mysql: host=localhost; dbname=modulo_7", "root", "");

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $id = $_POST['id'];
        
        $sql = $pdo->prepare("UPDATE `clientes` SET nome=? , sobrenome=? WHERE id = $id");
        $sql->execute(array($nome, $sobrenome));

        echo "Parabéns! Você atualizou o usuário com sucesso!";
        echo "<br/>";
        echo "Segue as informações adicionadas: <br/> Nome: $nome </br/> Sobrenome: $sobrenome";
    };

?>