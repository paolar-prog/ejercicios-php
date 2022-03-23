<?php
/*yramos arreglos que permitan mostrar la siguiente salida
1) Arroz. costo unitario $1.500, Cantidad: 2, total: $3.000
2) Aceite. costo unitario $2.000, Cantidad: 5, total: $10.000 */ 
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
    1650, 
    5800, 
    3200, 
    2000, 
    6400, 
    3200, 
    2900, 
];
$numAleatorio = rand(5,15);
$num=0;

for($i=0; $i <= 6; $i++){
    $num++;
    echo  "<br>  ".$num." ) ".$insumos[$i]. ".  costo unitario  $".number_format($precios[$i], 0, ",", ".").
    ", Cantidad: ".$numAleatorio.", total: $".number_format($numAleatorio*$precios[$i], 0, ",", ".")."</br>";   
}   

?>