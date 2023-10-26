<?php
    //Public funciona em qualquer lugar
    //Private apenas dentro da classe
    class Exemplo{
        private $var1;
        public $var2;
        public static $var3 = 'estático';

        public function metodo(){

        }

        private function metodo2(){

        }

        public static function metodoEstatico(){
            echo 'esse é meu método estático';
        }

        public function setVar1($var1){
            $this->var1 = $var1;
            return $this->var1;
        }
    };
?>