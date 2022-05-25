<?php

$num1 = 7;
$num2 = 9;
$num3 = 1;

$mayor = 0;
$mitad = 0;
$menor = 0;

/*if ($num1 > $num2) {
    $mayor = $num1;
} else {
    $mayor = $num2;

}*/

if ($num1 > $num2 && $num1 > $num3){
    $mayor = $num1;
} 


if ($mayor < $num3) {
    $mayor = $num3;
}


echo "El número mayor es $mayor";






//hacer cafe
//version1
if ($tengocafe) {
    echo 'Hagamos café';
} else {
    echo 'No puedo hacer café :(';
}

//version2
$puedehacercafe = false;

if ($tengocafe) {
    $puedehacercafe = true;
}

echo $puedehacercafe;

