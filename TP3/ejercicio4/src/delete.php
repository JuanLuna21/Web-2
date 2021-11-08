<?php
function eliminar($id){

    var_dump($id);
    echo "Eliminado";
    $db = new PDO('mysql:host=localhost;'.'dbname=tp3;charset=utf8', 'root' ,'');
    $sentencia = $db->prepare("DELETE FROM pagos WHERE id_deudor=?");
    $sentencia->execute(array($id));
    //

    header("location: ..");
    
}