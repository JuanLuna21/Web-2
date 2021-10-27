<?php 

$genero = $_GET['genero'];

$pais = $_GET['paises'];

$opcion = $_GET['opciones'];

foreach ($_GET['opciones'] as $key => $value) {
    echo "La opcion es: " . $value ."<br>";
}
echo "<br>";
echo "El genero es: " . $genero . "<br>" ;
echo "El pais es: " . $pais . "<br>";


?>