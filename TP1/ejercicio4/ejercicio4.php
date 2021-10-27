<?php

$arrays = array("primero","segundo","tercero","cuarto","quinto","sexto");           //creo el array con los elementos que quiero mostrar en php.
$show = count($arrays);          //creo otro array que me va a ir midiendo la cantidad de elementos que quiero mostrar.                                                            

if (isset($_GET['show'])) {    //este if, basicamente hace, que si el boton del <a> no esta vacio, que muestre el boton sellecionado
    $show = $_GET['show'];
}

echo "<ul>";

for ($y=0; $y < $show; $y++) { 
    echo "<li>". $arrays[$y]. "</li>";   //luego de eso, el for que empieza en 0 va a empezar a repetirise hasta 
}                                        // el numero que eligio el usuario, si es 2, repite hasta el 2, sino hasta el 3 y asi..   
                                          
echo "</ul>";

echo '<a href="?show=2">Mostrar los primeros 2</a>';
echo "<br>";
echo '<a href="?show=3">Mostrar los primeros 3</a>';
echo "<br>";
echo '<a href="?show=4">Mostrar los primeros 4</a>';
echo "<br>";
echo '<a href="?show=5">Mostrar los primeros 5</a>';
