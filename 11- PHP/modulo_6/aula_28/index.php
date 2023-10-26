<?php
//Incluindo a configuração criada para adicionar automaticamente os objetos:
include('config.php');
new utilidades();

//definir constante no PHP:
define("minhaConstante", "Gustavo Gomes");
echo minhaConstante;

//definir constante no PHPOO:
 class Teste{
    const Nome = "Gustavo";
    function __construct(){
        self::Nome;
    }
 }

 echo Teste::Nome;