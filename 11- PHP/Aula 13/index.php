<?php

    #Trabalhando com o Switch e Case
    $nome = "Guilherme";

    switch("$nome"){
        case 'Guilherme':
            echo "Meu nome é Guilheme";
            break;
    };

    $nomeTwo = "Gustavo";

    switch("$nomeTwo"){
        case "Agnaldo":
            echo "Nome errado";
            break;

        case "Stefany":
            echo "Nome errado";
            break;

        case "Gustavo":
            echo "Nome certo";
            break;
    };

    #Usando o break no loop
    for($i = 0; $i < 10; $i++){
        echo $i . "<br/>";
        echo "<hr/>";
        echo "<br/>";

        if($i == 5){
            break;
        };
    };


    #Continuando no loop com uma condicional:
    for($i=0; $i<10; $i++){

        if($i == 5){
            continue;
        }
        echo $i . "<br/>";
        echo "<hr/>";
        echo "<br/>";
    }
?>