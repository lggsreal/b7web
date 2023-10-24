<?php
    include('exemplo.class.php');

    //Instanciar
    $exemplo = new Exemplo();
    $exemplo->var2 = 'Olá';

    echo $exemplo->var2;

    $exemplo2 = new Exemplo();
    $exemplo2->var2 = "Nat Gomes";
    echo $exemplo2->var2;

    //Chamadno uma propriedade estática
    echo $exemplo::$var3;

    //Chamando uma variável estática
    Exemplo::metodoEstatico();
?>