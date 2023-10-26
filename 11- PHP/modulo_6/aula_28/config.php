<?php
//Criando função para incluir dinamicamente uma classe:
function myAutoLoad($class){
    $class = str_replace('\\','/', $class);
    if(file_exists('classes/'.$class. '.php')){
        include('classes/'.$class. '.php');
    }
}

//Incluindo dinamicante as classes
spl_autoload_register('myAutoLoad');
