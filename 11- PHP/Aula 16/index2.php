<?php
    #Vendo nome da sessão
    session_start();
    echo $_SESSION['nome'];

    #Verificando se uma sessão existe
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
    };

    #Acabar com uma sessão:
    unset($_SESSION['nome']);
    session_destroy();

?>