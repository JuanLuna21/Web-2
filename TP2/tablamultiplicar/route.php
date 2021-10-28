<?php
require_once 'index.php';
require_once 'tablamultiplicar.php';

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
    case 'tablamultiplicar':
        tablamultiplicar($_GET['num']);
        break;
    default:
        echo'error';
        break;
}