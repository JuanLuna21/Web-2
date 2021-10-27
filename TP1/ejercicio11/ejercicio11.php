<?php

$arreglo = array('a','b','c','d','e');
$mostrar = count($arreglo);

if (isset ($_GET['mostrar'])) {
    $mostrar = $_GET['mostrar'];
}

    echo "<ul>";

for($y = 0; $y < $mostrar; $y++){

    echo "<li data-ident='$y'>" .$arreglo[$y].   "</li>";

}
    echo "</ul>";

