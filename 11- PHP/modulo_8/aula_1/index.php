<?php
    if(file_exists('file.txt')){
        echo "Meu texto existe";
        $content = "Esse é meu conteúdo";
        file_put_contents('file.txt', $content);
    }else{
        echo "Meu texto não existe";
        $content = "Esse é meu conteúdo";
        file_put_contents('file.txt', $content);
    }

    $textContent = file_get_contents('file.txt');
    echo $textContent;
?>