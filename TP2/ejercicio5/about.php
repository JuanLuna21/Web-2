<?php

function ShowAbout (){

$desarrolladores = array(
    "Gonzalo" => "Primera descripcion.",
    "Juan" => "Segunda descripcion.",
    "Fede" => "Tercera descripcion.",
);
if(isset($_GET['desarrollador'])){
    $desarrollador = $_GET['desarrollador'];
    
    if(isset($desarrolladores[$desarrollador])){
        $desc = $desarrolladores[$desarrollador];
    }
    else{
        $desc = "Un desarrollador que no está en nuestra base de datos.";
    }

    echo "<h1>Acerca de $desarrollador</h1>";
    echo "<p>$desc</p>";
    echo  "<a href='about'>Atras</a>";

}
else{
        echo "<h1>Acerca de los desarrolladores</h1>";

        echo "<ul>";
        foreach ($desarrolladores as  $clave => $valor) {
            echo "
                <li>
                    <a href='desarrollador/$clave'>
                        $clave
                    </a>
                </li>
            ";
        }
        
        echo  "<a href='http://localhost/practice/TP2/ejercicio5/'>Atras</a>";
        echo "</ul>";
    
    }
}