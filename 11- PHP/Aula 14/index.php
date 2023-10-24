<?php
    #Unir dois ou mmais arrays // array_merge
$arrayOne = array('Gustavo', 'Mônica');
$arrayTwo = array('Natalia', 'Agnaldo');
$arrayTogheter = array_merge($arrayOne, $arrayTwo);
print_r ($arrayTogheter);

    #Unir um ou mais array (retornar valores com um ou mais array) // array_intersect_key
$arrayThree = array('Naldo','valor2' => 'Heitor');
$arrayFour = array('Josivaldo', 'valor2' => 'Katia');
$result = array_merge(array_intersect_key($arrayThree, $arrayFour));
print_r($result);

    #aplicar uma funçaõ em todo o array
$arr = [
    'Guilherme',
    'João',
    'Fabricio'
];

print_r(array_map('strip_tags', $arr));