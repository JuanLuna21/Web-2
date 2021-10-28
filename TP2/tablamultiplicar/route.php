<?php
require_once 'index.php';
require_once 'tablamultiplicar.php';

if (!empty($_POST['num'])) {
    $action = $_POST['num'];
} else {
    $action = 'home';
}

$params  = explode('/', $action);

switch ($params[0]) {
    case 'home':
      ShowHome();
        break;
    case 'tablamultiplicar':
        tablamultiplicar();
        break;
    default:
        echo'error';
        break;
}