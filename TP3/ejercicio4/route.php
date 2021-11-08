<?php
require_once('src/datos.php');
require_once('src/insert-form.php');
require_once('src/delete.php');
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];

    
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        showHome(); 
        break;
    case 'insert':    
    $deudor = $_POST['deudor'];
    $cuota = $_POST['cuota'];
    $capital = $_POST['capital'];
    $fecha = $_POST['fecha'];
        insertar($deudor,$cuota,$capital,$fecha);
        break;
    case 'eliminar':
        eliminar($params[1]);
        break;
    default: 
        echo('404 Page not found'); 
        break;
}