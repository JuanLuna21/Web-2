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

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$params  = explode('/',$action);

switch ($params[0]) {
    case 'about': 
        if(isset($params[1])){
            showAbout($params[1]); 
        }else{
            showAbout(); 
        }
        break;
    case 'operaciones': 
        ShowOperacion($params[1], $params[2]); 
        break;
    case 'dividir': 
        ShowOperacion($params[1], $params[2]);
        break;
    case 'operaciones': 
        ShowOperacion($params[1], $params[2]);
        break;
    case 'pi': 
        showPi(); 
        break;
    case 'home': 
        ShowHome(); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}
