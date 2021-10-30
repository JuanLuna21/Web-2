<?php
require_once 'C:\xampp\htdocs\Practice\TP3\ejercicio3\smarty-3.1.39\libs\Smarty.class.php';
require_once 'view.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

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
    case 'pagos':
        getPagos();
        break;
    default:
        echo 'error';
        break;
}
