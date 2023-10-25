<?php
    class ClassOne{
       public function __construct($nome, $idade)
       {
        $this->nome = $nome;
        $this->idade = $idade;
       } 

       private $nome;
       private $idade;

       public function getNome(){
        return $this->nome;
       }

       public function getIdade(){
        return $this->idade;
       }
    }