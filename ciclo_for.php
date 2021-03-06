<?php

echo "<center> ***** TABLAS DE MULTIPLICAR ***** </center> <br>";

for($num=1; $num <= 9; $num++){
    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
    echo  "<center> $num x $i = ".$num*$i." </center>";
        
    }
}   

?>