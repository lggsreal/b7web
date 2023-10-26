<?php
    //Criando objeto com classes mágicas:
    class TestingOne{
        public function __construct($nome, $idade, $cidade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cidade = $cidade;
        }

        private $nome;
        private $idade;
        private $cidade;

        public function callingName(){
            return $this->nome;
        }

        public function callingAge(){
            return $this->idade;
        }

        public function callingCity(){
            return $this->cidade;
        }
      
    }

    //Criando um objeto com classes mágicas 2
    class TestingTwo{
        public function __construct($comida, $restaurante)
        {
            $this->comida = $comida;
            $this->restaurante = $restaurante;
        }

        private $comida;
        private $restaurante;

        public function callingComida(){
            return $this->comida;
        }

        public function callingRestaurante(){
            return $this->restaurante;
        }
    }

    class TestingThree extends TestingOne{

    }

