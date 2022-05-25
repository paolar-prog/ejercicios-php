<?php
$num1 = 7;
$num2 = 1;
$num3 = 10;

$mayor = 0;
$mitad = 0;
$menor = 0;

if (($num1 > $num2) or ($num1 > $num3)){
    $mayor = $num1;  
} else {  
    $menor = $num1;
} 
if(($num1!=$mayor) or ($num1!=$menor)){
    $mitad = $num1;
}
   
if (($num2 > $num1) or ($num2 > $num3)){
     $mayor = $num2;  
} else {  
    $menor = $num2;
} 
if(($num2!=$mayor) or ($num2!=$menor)){
     $mitad = $num2;
} 

if (($num3 > $num1) or ($num3 > $num2)){
     $mayor = $num3;  
} else {  
    $menor = $num3;
} 
if(($num3!=$mayor) or ($num3!=$menor)){
    $mitad = $num3;
}
        
echo "el numero mayor es $mayor  el  numero menor es $menor el numero de la mitad es $mitad"; 

?>