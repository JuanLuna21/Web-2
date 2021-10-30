<?php


require_once 'C:\xampp\htdocs\Practice\TP3\ejercicio3\smarty-3.1.39\libs\Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('titulo','lista de pagos');

$smarty->assign('pagos', $pagos);

$smarty->display('templates/home.tpl');

