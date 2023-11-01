<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando o delete</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Digite aqui o usuário que você quer deletar" name="id_del">
        <input type="submit" placeholder="Enviar" name="acao">
    </form>
</body>
</html>
<?php
    include('del_comand.php');
?>