<?php
     echo "***** Boletin de Notas *****";
    $array = [
        'ciencias' => '2.5',
        'sociales' => '5.0',
        'matematicas'  => '4.5',
        'ingles'   => '3.5',
    ];
     
    extract($array);
    echo "\n";
     
    echo(" $ciencias \n $sociales \n $matematicas \n $ingles \n");
?>