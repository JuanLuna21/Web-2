<?php

require_once'';
require_once'';
require_once'';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params  = explode('/', $action);

switch ($params[0]) {
    case 'home':
      
        break;
    case 'ObtenerLista':
       
        break;
    case 'NuevoUsuario':
      
        break;
    case 'VerInformacionDeUsuario':
        
        break;
    default:
        echo ('404 Page not found');
        break;
}
