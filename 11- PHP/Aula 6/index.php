<?php
#Loop while:
$numero = 0;

while($numero < 10){
    echo "Número: ".$numero."<br/>";
    $numero++;
}

#Loop for:
for($numero = 0; $numero < 10; $numero++){
    echo "Numero: ".$numero."<br/>";
};

#Loop foreach: 
$ingredientes = [
    'açúcar',
    'Farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

foreach($ingredientes as $chave => $valor){
    echo "Item: ".$chave." " .$valor."<br/>";        
};

foreach($ingredientes as $chave => $valor){
    echo "Item " .($chave + 1) . ": " .$valor."<br/>";        
};

foreach($ingredientes as $ing){
    echo "<li>" . $ing . "</li>";
}