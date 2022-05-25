<?php

$edad = 34;
$nombre = 'Alex';


echo "<strong> Hola $nombre, tu edad es $edad años </strong>";

echo '<br>';

echo '<strong> Hola, ' . $nombre . ' tu edad es ' . $edad . ' años </strong>';

if($edad < 18){
    echo 'es menor de edad';
}
else{
    echo'es mayor de edad';
}

?>