<?php

//Testando métodos mágicos:
include('class.php');
$testOne = new TestingOne("Gustavo Gomes", 20, "Belém");
echo $testOne->callingName();
echo $testOne->callingAge();
echo $testOne->callingCity();

//Testando métodos mágicos
$testTwo = new TestingTwo('Maniçoba', 'Restô Açaí');
echo $testTwo->callingRestaurante();
echo $testTwo->callingComida();

//Testando o construtor com um método herdado da classe pai
$testingThree = new TestingThree('Severino', 109, 'Acre');
echo $testingThree->callingName();
echo $testingThree->callingAge();
echo $testingThree->callingCity();
