<?php

    //Namespace funciona como se fosse uma pasta:
    namespace Sessao1;
    class ClassOne{
        function __construct()
        {   
            new \sessao2\ClassTwo;
            echo "Classe instanciada";
        }
    }
?>