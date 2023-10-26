<?php
    $lista = [
        $nome = "Gustavo",
        $idade = 90,
        $atributos = [
            $forca = 60,
            $agilidade = 80,
            $destreza = 50
        ],
        $vida = 1000,
        $mana = 928
    ];

    echo "Nome: ".$lista[0]."<br/>";
    echo "Força: ".$lista[2][0]."<br/>";
    echo "Vida: ".$lista[3];
?>