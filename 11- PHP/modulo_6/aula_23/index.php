<?php
//Uma classe que serve apenas para ser herdada e não istanciada
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

//Método estático
    class Animals{
        public static function showLion(){
            echo "This is a Lion";
            echo "<br/>";
        }

        public function showCat(){
            echo "Hi, this is a cat!";
            echo "<br/>";
            self::showLion();
            echo "<br/>";
        }
    }

    Animals::showLion();
    $animals = new Animals;
    $animals->showCat();



