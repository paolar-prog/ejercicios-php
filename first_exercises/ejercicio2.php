<?php
    $mingastados = 20;
    $pagar = 0;

    if($mingastados >= 100){

        $pagar = $mingastados*150;

    }
    else {
        $pagar = $mingastados*300;

       
    }
    echo '<h1>El total a pagar es ' . $pagar . ' pesos</h1>';
?>