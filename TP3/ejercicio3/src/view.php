<?php
require_once 'libs\smarty-3.1.39\libs\Smarty.class.php';

function ShowHome()
{
    $db = new PDO('mysql:host=localhost;' . 'dbname=tp3;charset=utf8', 'root', '');

    $sentencia = $db->prepare("SELECT * FROM pagos");
    $sentencia->execute();
    $pagos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $lista= [];

    foreach ($pagos as $pago) {
    
        $lista[]=$pago;
    
    }
    
    $smarty = new Smarty();
    
    $smarty->assign('titulo','lista de pagos');
    
    $smarty->assign('lista', $lista);
    
    $smarty->display('templates/home.tpl');


}

function Insert($deudor,$cuota,$capital,$fecha){

    $db = new PDO('mysql:host=localhost;' . 'dbname=tp3;charset=utf8', 'root', '');
    $sentencia = $db->prepare("INSERT INTO pagos (deudor, cuota, cuota_capital, fecha_pago) VALUES ( ?, ?, ?, ?)");
    $sentencia->execute(array($deudor,$cuota,$capital,$fecha));
    showHomeLocation();

}

function Delete($id){

    $db = new PDO('mysql:host=localhost;' . 'dbname=tp3;charset=utf8', 'root', '');
    $sentencia = $db->prepare("DELETE FROM pagos WHERE id_deudor=?");
    $sentencia->execute(array($id));
    showHomeLocation();

}

function listaDeudorDeterminado($id){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tp3;charset=utf8', 'root', '');
    $sentencia = $db->prepare("SELECT * FROM pagos WHERE id_deudor=?");
    $sentencia->execute(array($id));
    $listadeudor = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $listas=[];

    foreach ($listadeudor as $deuda) {
    
       $listas[]=$deuda;
    
    }

    $smarty = new Smarty();
    
    $smarty->assign('titulo','lista de deudas');
    
    $smarty->assign('listadeudor', $listadeudor);
    
    $smarty->display('templates/deudor.tpl');

}

function listaMontoDeterminado($monto){
    $db = new PDO('mysql:host=localhost;' . 'dbname=tp3;charset=utf8', 'root', '');
    $sentencia = $db->prepare("SELECT * FROM pagos WHERE cuota_capital > $monto");
    $sentencia->execute(array());
    $montosDeudores = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $listamonto=[];
    
    foreach ($montosDeudores as $montos) {
        $listamonto[] = $montos;
    }
   

    $smarty = new Smarty();
    
    $smarty->assign('titulo','lista de monto determinado');
    
    $smarty->assign('MontosDeudores', $montosDeudores);
    
    $smarty->display('templates/Montos.tpl');


}

function ActualizarCuotaCapital($id,$edite){

    $db = new PDO('mysql:host=localhost;' . 'dbname=tp3;charset=utf8', 'root', '');

    $sentencia = $db->prepare("UPDATE pagos SET cuota_capital = ? WHERE id_deudor=? ");

    $sentencia->execute(array($edite, $id));


    showHomeLocation();

}


function  editarform($id){
    
    
    $smarty = new Smarty();
    
    $smarty->assign('titulo','actualizando');
    
    $smarty->assign('id', $id);
    
    $smarty->display('templates/actualizar.tpl');


}



function showHomeLocation()
    {
        header("Location: " . BASE_URL . "home");
    }

