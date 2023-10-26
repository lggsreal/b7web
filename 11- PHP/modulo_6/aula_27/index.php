<?php
    include('classOne.php');
    include('classTwo.php');

    //chamando objeto por namespace
    $classOne = new sessao1\ClassOne();
    $classTwo = new sessao2\ClassTwo();

    use sessao2\classThree as classe3;
    $classThree = new classe3;   
?>