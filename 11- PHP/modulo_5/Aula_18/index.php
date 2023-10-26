<?php
    session_start();
    setcookie('nome', 'gustavo', time() + (60 * 60 * 24), "/");
    echo $_COOKIE['nome'];

    date_default_timezone_set('America/Belem');
    echo date('d//m/y  H:i:s');
?>