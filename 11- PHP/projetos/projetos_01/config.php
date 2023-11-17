<?php
    $autoload = function($class){
            include('classes/' .$class. '.php');
        
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','http://localhost/11-PHP/projetos/projetos_01/');
?>