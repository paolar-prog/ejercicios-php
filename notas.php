<?php
$notas = 0;

echo "***** Boletin de Notas ***** \n";

$array = [
        'ciencias' => '2.5',
        'sociales' => '5.0',
        'matematicas'  => '4.5',
        'ingles'   => '3.5',
    ];
     
    extract($array);
    echo "\n";
     
   echo " ciencias = $ciencias \n sociales = $sociales \n matematicas = $matematicas \n ingles = $ingles \n";
     
   $j = 0;
 
    foreach($array as $materia => $elemento)
    {
        if($elemento < 3.5){
        echo "\n";
        echo "la nota perdida es ".$elemento;
       }
       
    }
?>