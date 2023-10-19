<?php
 $idade = 11;

 if($idade >= 18){
    echo "Você é maior de idade.";
 }else{
    echo "Você é menor de idade";
 }

 #ternario
 $resultado = ($idade < 18) ? "Você é menor de idade" : "Você é maior de idade";
?>