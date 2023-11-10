<?php
    mkdir('test');
    
    if(is_dir('test')){
        echo "Está é uma página válida";
    }else{
        echo "Esta pasta não existe";
    }

    rmdir('test');
?>