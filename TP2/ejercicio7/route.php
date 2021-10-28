<?php
require_once 'index.php';
require_once 'lista.php';
require_once 'verFigura.php';
require_once 'filtro.php';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params  = explode('/', $action);

switch ($params[0]) {
    case 'home':
        ShowHome();
        break;
    case 'lista':
        lista();
        break;
    case 'filtro':
        filtro($params[1]);
        break;
    case 'verFigura':
        verFigura($params[1]);
        break;
    default:
        echo 'error';
        break;
}
