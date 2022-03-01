
<?php

$num = [
    '10', 
    '20', 
    '30', 
    '40', 
    '50', 
    '60', 
    '70', 
    '80', 
    '90'
];


for($i=1;  $i<= 10; $i++){
    echo "<br>";
    for ($a = 1; $a <= 9; $a++) {
    echo  "<center> $num[$i] x $a = ".$num[$i]*$a." </center>";
    }
    
        
}
        

?>