<?php
    #Trabalhando com datas:

    date_default_timezone_set('America/Sao_Paulo');

    $data = date('d/m/y H:i:s', time()+(60*10));
    echo $data;

    #Função include:
    include('header.php');
    echo "Meu conteúdo da home";
    include('footer.php');
?>