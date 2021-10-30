<?php

require_once 'C:\xampp\htdocs\Practice\TP3\ejercicio3\smarty-3.1.39\libs\Smarty.class.php';
require_once 'view.php';
require_once 'route.php';


$smarty = new Smarty();

$smarty->assign('titulo','lista de pagos');

$smarty->assign('pagos', $pagos);

$smarty->display('templates/home.tpl');

