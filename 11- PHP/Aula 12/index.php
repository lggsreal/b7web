<?php
    #Cortar string -  substr($variavel, ondeComeça, ondeTermina);
    $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque elementum neque nec massa venenatis, sed vulputate dui ultricies. 
    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In diam velit, malesuada nec consequat sit amet, ultricies sit amet arcu. 
    Suspendisse potenti. Morbi orci massa, ullamcorper at lobortis at, commodo a velit. Donec viverra tortor ligula, vel maximus justo lacinia in. Nullam feugiat sodales 
    dui molestie fermentum. Cras maximus felis vel viverra egestas. Ut feugiat facilisis eleifend. 
    Ut maximus vehicula hendrerit. Morbi sodales ante vitae ex mollis, a mattis sapien placerat. Donec euismod accumsan leo vitae fringilla. Mauris non vulputate risus.";

    echo substr($conteudo, 0, 20)."<br/>";


    #Transformar string em array pelos os indices
    $nomes = "Luiz Gustavo Gomes da Silva";
    $nomeIndividual = explode(' ', $nomes);

    print_r($nomeIndividual);
    echo "<br/>";
    /*Obs: a função print_r é para enxergar os arrays na tela.*/


    #Juntar os arryas en una string;
    $nomesArrays = array('Carlos, Agnaldo, Victor, Stefany, Gustavo, Hiroshi');
    $nomesForadoArray = implode(' ', $nomesArrays);

    echo $nomesForadoArray;
    echo "<br/>";

    #Codigo sem HTML para formulário:
    $htmlTest = "<h1>Gustavinho</h1>";
    echo strip_tags($htmlTest);
?>