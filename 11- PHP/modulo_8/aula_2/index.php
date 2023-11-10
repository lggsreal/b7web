<?php
    for ($i=0;$i<100;$i++){
        $content = "Esse é meu conteúdo";
        file_put_contents("file" .$i. ".txt", $content);
        unlink("file".$i.".txt");
    }

    
?>