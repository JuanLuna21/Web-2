<?php
require_once('lib/smarty-3.1.39/lib/Smarty.class.php'); 

    $id = 5;
    $db = new PDO('mysql:host=localhost;'.'dbname=tp3;charset=utf8', 'root' ,'');
    
    $sentencia = $db->prepare("INSERT INTO pagos (id_deudor, deudor, cuota, cuota_capital, fecha_pago) VALUES ($id, 'Test3', 8, 600, '2016-08-19')");
    $sentencia->execute();
    $id +=1;
    
        echo 'ejecutado con exito';
    
    header("location: http://localhost/web2/tp3/ejer4/datos.php");
   
    
