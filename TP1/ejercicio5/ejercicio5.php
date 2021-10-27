<?php

$weight = $_REQUEST ['weight'];
$height = $_REQUEST ['height'];
$IMC = $weight / ($height*2); 

echo 'ICM: '. $IMC;

if ($IMC <18.50) {
    echo '<p> low weight </p>';
}
elseif ($IMC < 24.99) {
    echo '<p> Normal weight </p>';
}
elseif ($IMC < 30) {
    echo '<p> overweight </p>';
}
elseif ($IMC >= 30) {
    echo '<p> obesity </p>';
} {
    
}