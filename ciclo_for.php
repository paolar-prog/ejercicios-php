<?php

echo "***** TABLAS DE MULTIPLICAR ***** \n";

for($num=1; $num <= 9; $num++){
    echo "\n";
    for ($i = 1; $i <= 10; $i++) {
    echo  "$num x $i = ".$num*$i."\n";
        
    }
}   

?>