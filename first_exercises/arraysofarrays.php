<?php
/* Fecha creacion: 09/06/2022
   Autor: yramos
   Funcionalidad: Reconocer el uso del arreglo de arrelos en PHP */

$empleado['nombre'] = 'Paito';
$empleado['cargo'] = 'Desarrolladora';
$empleado['salario'] = number_format(2000000);
$empleado['activo'] = 'true';
$empleado['experiencia'] = '1 año';

$empleados[] = $empleado;

$empleado['nombre'] = 'Alex';
$empleado['cargo'] = 'Administrador de Empresas';
$empleado['salario'] = number_format(3000000);
$empleado['activo'] = 'true';
$empleado['experiencia'] = '10 años';

$empleados[] = $empleado;

$empleado['nombre'] = 'Joshua';
$empleado['cargo'] = 'Médico Pediatra';
$empleado['salario'] = number_format(4000000);
$empleado['activo'] = 'true';
$empleado['experiencia'] = '3 años';

$empleados[] = $empleado;

$empleado['nombre'] = 'Jose';
$empleado['cargo'] = 'Desarrollador';
$empleado['salario'] = number_format(5000000);
$empleado['activo'] = 'false';
$empleado['experiencia'] = '10 años';

$empleados[] = $empleado;

echo "<h1><center> *** Nomina Empleados Associated Professionals *** </center></h1> ";

foreach ($empleados as $indice => $empleado) {
    echo "<br>";
    echo "Datos del empleado ".($indice + 1)."\n";
    echo "<br>";
    foreach ($empleado as $index => $valor) {
        echo "$index => $valor"."\n";
        echo "<br>";
    }
}

?>
