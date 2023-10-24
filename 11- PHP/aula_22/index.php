<?php
    final class Filha extends Pai{
        public function sayHi(){
            echo "Hi, world";
            echo "<br/>";
            parent::sayBye();
        }
    }

    class Pai{
        public function sayBye(){
            echo "Goodbye, world!";
        }

        protected function teste(){
            echo "chamando função teste";
        }
    }

    //Istanciando uma classe que não seja final:
    $pai = new Pai;
    $pai->sayBye();

    //Istanciando uma classe que seja final:
    $filha = new Filha;
    $filha->sayHi();

    #Classe final não pode extender
    //Istanciando classe com extend
    $filha->sayBye();
    $filha->sayHi();

?>