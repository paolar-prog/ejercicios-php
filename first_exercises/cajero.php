<?php
$saldo = 1000000;
$clave = 123;


    echo "Su saldo actual es $saldo";
    
    echo '<br>';
    echo '<br>'; 
    
    echo '************************************************';

    echo '<br>';
    echo '<br>'; 

        if($clave == 123 && $saldo > 0){
            echo '<br>';
            echo 'Esta apunto de realizar un retiro de 1.000.000';
            echo '<br>';
            echo '<br>';
            $saldo = $saldo - 900000;
            echo '<br>';
            echo "Su clave es correcta, su saldo actual es $saldo";
        }else{
            echo "Transaccion declinada, verifique su clave";
        }
    echo '<br>';
    echo '<br>';
    echo '**************************************************';
    echo '<br>';


    if($clave == 123 && $saldo > 0){

        echo '<br>';
        $saldo = $saldo - 10000000;
        echo '<br>';
        echo "Su clave es correcta, su saldo actual es $saldo";

    }else{
        echo "Transaccion declinada, verifique su clave";
    }
                

    

?>