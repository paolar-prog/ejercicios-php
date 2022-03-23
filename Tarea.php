<?php
$insumos = [
    'Arroz', 
    'Aceite', 
    'Lenteja', 
    'Pasta', 
    'Frijol', 
    'Garbanzo', 
    'Areparina', 
];
$precios = [
    '1650', 
    '5800', 
    '3200', 
    '2000', 
    '6400', 
    '3200', 
    '2900', 
];
$numAleatorio = rand(5,15);
$num=0;

for($i=0; $i <= 6; $i++){
    for ($j = 0; $j <=6; $j++) {
    }
    $num++;
    echo  "<br>  ".$num." ) ".$insumos[$i]. ".  costo unitario  $".number_format($precios[$i], 0, ",", ".").
    ", Cantidad: ".$numAleatorio.", total: $".number_format($numAleatorio*$precios[$i], 0, ",", ".")."</br>";   
}   

?>