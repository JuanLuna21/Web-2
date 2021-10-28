<?php
require_once 'lib/Figuras.php';
function  lista(){

// instancia la clase Figuras para acceder a las figuras
$figuras = new Figuras();

echo 
"<h1>Listado de figuras</h1>
    <ul>";

foreach($figuras->getAll() as $figura) {
    echo "<li>" . 
            $figura->ToString() . 
            " | <a href='verFigura/" . $figura->getId() . "'>VER </a>" .
         "</li>";
}

echo "
    </ul>
    <a href='./'>Volver</a>";
}