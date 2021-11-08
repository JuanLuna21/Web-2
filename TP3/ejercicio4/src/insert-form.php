<?php
function insertar($deudor,$cuota,$capital,$fecha){
    //$deudor = $_GET['deudor'];
    //$cuota= $_GET['cuota'];
    //$capital= $_GET['capital'];
    //$fecha= $_GET['fecha'];
    var_dump($deudor);
    $db = new PDO('mysql:host=localhost;'.'dbname=tp3;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("select * from pagos");
    $sentencia->execute();
    $tareas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $id=0;
    
    foreach ($tareas as $tarea) {
        if($tarea->id_deudor != $id){
            break;
        }
        $id+=1;
        
    }
    
    
        $sentencia = $db->prepare("INSERT INTO pagos (id_deudor,deudor, cuota, cuota_capital, fecha_pago) VALUES (?, ?, ?, ?, ?)");
        $sentencia->execute(array($id,$deudor,$cuota,$capital, $fecha ));
        
        
        header("location: home");
}