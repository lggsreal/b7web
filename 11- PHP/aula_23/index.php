<?php
//Uma classe que serve apenas para ser herdada e não instanciada
    abstract class Test{
        public function callingFunction(){
            echo "Estou chamando a minha função";
        }
    };

    class Test2 extends Test{
        
    }

    $test2 = new Test2;
    $test2->callingFunction();

//Declarando um método abstrato:
    abstract class Pai{
        abstract function heyBrother();
    };

    class Filho{
        function heyBrother(){
            echo "<br/>";
            echo "Declarand oficialmente minha função/método abstrato";
        }
    };

    $filho = new Filho;
    $filho->heyBrother();