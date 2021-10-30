<?php
require_once 'C:\xampp\htdocs\Practice\TP3\ejercicio3\libs\smarty-3.1.39\libs\Smarty.class.php';

function getPagos()
{
    $db = new PDO('mysql:host=localhost;' . 'dbname=tp3;charset=utf8', 'root', '');

    $sentencia = $db->prepare("SELECT * FROM pagos");
    $sentencia->execute();
    $pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $pagos;

    
    $smarty = new Smarty();
    
    $smarty->assign('titulo','lista de pagos');
    
    $smarty->assign('pago', $pagos);
    
    $smarty->display('templates/home.tpl');


}

