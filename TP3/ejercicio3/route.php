<?php

require_once 'src/view.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params  = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'insert':
        Insert($_POST['deudor'],$_POST['cuota'],$_POST['capital'],$_POST['fecha']);
    break; 
    case 'delete':
        var_dump($params);
        Delete($params[1]);
        break;
    case 'ver':
        listaDeudorDeterminado($params[1]);
        break;    
    case 'monto':
        listaMontoDeterminado($_POST['monto']);
        break;     
    case 'edite':
            ActualizarCuotaCapital($_POST['id'],$_POST['edite']);
        break;
    case 'editform';
            editarform($params[1]);
        break;
    default:
        echo '404 Page not found';
        break;
}
