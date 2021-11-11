<?php

require_once 'controller/clubcontroller.php';
require_once 'controller/logincontroller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controllerClub = new clubController();
$controllerClublogin = new clubControllerlogin();


switch ($params[0]) {
    case 'login':
        $controllerClublogin->showLogin($_POST['correo'],$_POST['contraseña']);
    break;
    case 'home':
        $controllerClub->ShowHome();
        break;
    case'InsertarHabitacion':   
        if (!empty($_POST['nro_habitacion'])&& !empty($_POST['cant_camas']) && !empty($_POST['descripcion'])&& !empty($_POST['ocupada'])){
            $controller->InsertarHabitacion($_POST['nro_habitacion'],$_POST['cant_camas'],$_POST['descripcion'],$_POST['ocupada']);
          }
     break;
    default:
        echo ('404 Page not found');
        break;
}
