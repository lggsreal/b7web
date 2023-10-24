<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <!--Pegar informações do form via post-->
    <?php
        if(isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            echo "$nome";
            echo "<br/>";
            echo "$email";
        }
    ?>
   <form action="" method="POST">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name="acao" value="enviar">
   </form>

    <!-- Pequena calculadora -->
    <?php
        if(isset($_POST['acao2'])){
            $numberOne = $_POST['numberOne'];
            $numberTwo = $_POST['numberTwo'];

            echo "$numberOne" + "$numberTwo";
        };
    ?>
   <form action="" method="POST">
        <input type="number" name="numberOne">
        <input type="number" name="numberTwo"> 
        <input type="submit" name="acao2" value="Enviar">
   </form>

   <!--tREINANDO COM CHECKBOX-->
   <?php
        if(isset($_POST["acao3"])){
            foreach ($_POST['valor'] as $key => $value) {
                echo "$value";
                echo "<br/>";
            }
        };
   ?>
    <form action="" method="POST">
        <input type="checkbox" name="valor[]" value="10">
        <input type="checkbox" name="valor[]" value="30">
        <input type="checkbox" name="valor[]" value="40">
        <input type="checkbox" name="valor[]" value="50">
        <input type="submit" name="acao3" value="Enviar">
    </form>

</body>
</html>