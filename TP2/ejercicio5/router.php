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

$params  = explode('/',$action);

switch ($params[0]) {
    case 'about': 
        if(isset($params[1])){
            showAbout($params[1]); 
        }else{
            showAbout(); 
        }
        break;
    case 'sumar': 
        suma($params[1], $params[2], $params[0]); 
        break;
    case 'dividir': 
        dividir($params[1], $params[2], $params[0]);
        break;
    case 'restar': 
        restar($params[1], $params[2], $params[0]);
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
