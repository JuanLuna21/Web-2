<?php
require_once "pi.php";
require_once "about.php";
require_once "operaciones.php";
require_once "index.php";

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$params  = explode('/', $action);

switch ($params[0]) {
    case 'about':
        if (isset($params[1])) {
            showAbout($params[1]);
        } else {
            showAbout();
        }
        break;
    case 'operaciones':
        switch ($_POST['operacion']) {
            case 'sumar':
                $resultado = sumar($_POST['op1'], $_POST['op2']);
                echo ($resultado);
                break;
            case 'restar':
                $resultado =restar($_POST['op1'],  $_POST['op2']);
                echo ($resultado);
                break;
            case 'multiplicar':
                $resultado = multiplicar($_POST['op1'], $_POST['op2']);
                echo ($resultado);
                break;
            case 'dividir':
                $resultado = dividir($_POST['op1'], $_POST['op2']);
                echo ($resultado);
                break;
            default:
                echo 'error';
                break;
        }
        break;
    case 'pi':
        showPi();
        break;
    case 'home':
        ShowHome();
        break;
    default:
        echo ('404 Page not found');
        break;
}
