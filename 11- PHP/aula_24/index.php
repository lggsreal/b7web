<?php
//Incluindo o arquivo de interface:
    include('interface1.php');


//Implementada a interface, porém, tive que escrever o método aqui novamente, pois, a interface exige.
    class Teste implements Interface1{
        public function printOnScreen($par){
            echo "Olá";
        }
    }

    $teste = new Teste;
    $teste->printOnScreen('Olá, mundo!');
?>