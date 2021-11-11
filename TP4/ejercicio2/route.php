<?php

require_once 'controller/casinocontroller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controllerCasino = new casinocontroller();

switch ($params[0]) {
    case 'home':
        $controllerCasino->ShowHome();
        break;
    case 'InsertarJuego':
        $controllerCasino->InsertJuego($_POST['nombre'],$_POST['cantidadJugadores'],isset($_POST['si']));
        break;
    default:
        echo ('404 Page not found');
        break;
}
