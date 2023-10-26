<?php
    $bolo = [
        "Fermento",
        "Trigo",
        "Ovo",
        "Leite",
        "Açucar"
    ];

    $bolo2 = [
        ...$bolo,
        "Corante"
    ];

    $bolo3 = [
        ...$bolo,
        ...$bolo2
    ];

    print_r($bolo3)
?>
