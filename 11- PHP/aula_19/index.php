<?php
//Criando objeto
    class Pessoa{
        private $nome = "Gustavo";
        private $idade = "20";
        private $peso = "70kg";

        public function crescer(){
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo';
        }
    };

//Instanciar objeto
$pessoa = new Pessoa;
$pessoa2 = new Pessoa;

$pessoa -> crescer();
?>