<?php

echo "<h1><center>**** NOMINA PRUEBA S.A ****</center></h1><br>";

$salario = [
    2000000,
    1000000,
    950000,
    750000,
    2500000
];
$salarioMinimo = 1000000;
$valor=3.5;
$sueldoTotal=0;

for($i=0; $i<= 4; $i++){
    if($salario[$i]>$salarioMinimo ){
       $sueldoTotal=$salario[$i]-($salario[$i]*$valor/100);
       echo "<h4> El Empleado # ".$i. " tiene un salario asignado de: $ ".$sueldoTotal."</h4><br>";
    }
    if ($salario[$i]<=$salarioMinimo ) {
        $sueldoTotal=$salario[$i]+120000;
        echo "<h4> El Empleado # ".$i. " tiene un salario asignado de: $ ".$sueldoTotal."</h4><br>";
    }
}



?>

