<?php

require_once 'controller/controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new controllerMaterias();


switch ($params[0]) {
    case 'home':
        $controller->ShowHome();
        break;
    case 'insertMaterias':
        $controller->insertMateria($_POST['materia'], $_POST['profesor'], $_POST['carrera'], $_POST['id']);
        break;
    case 'editarMaterias':
        $controller->editarMaterias($_POST['id'], $_POST['materia'], $_POST['profesor'], $_POST['carrera']);
        break;
    case 'edite':
        $controller->edite($params[1]);
        break;
    case 'delete':
        $controller->delete($params[1]);
        break;
    case 'materia':
        $controller->materiaSeleccionada($_POST['materia']);
        break;
    case 'carrera':
        $controller->carreraSeleccionada($_POST['carrera']);
        break;
    case 'mostrarCarreras':
        $controller->mostrarCarrera3Años(3);
        break;
    default:
        echo ('404 Page not found');
        break;
}
