<?php
require_once('operaciones.php');

if((isset($_GET['op1']) && (isset($_GET['op2']) && (isset($_GET['operacion']))))){
    $op1 = intval($_GET['op1']);
    $op2 = intval($_GET['op2']);
    $operacion = $_GET['operacion'];
var_dump($_GET);
switch ($operacion) {
    case 'sumar';
    $resultado = suma($op1, $op2);
    $signo = "+";
    break;
    case 'restar';
    $resultado = restar($op1, $op2);
    $signo ="-";
    break;
    case 'multiplicar';
    $resultado = multiplicar($op1, $op2);
    $signo = "*";
    break;
    case 'dividir';
    $resultado = dividir($op1, $op2);
    $signo ="/";
    break;
    default;
    echo "<p>Error en la operación</p>";
    break;


    
}
echo "El resultado de $op1 $signo $op2 es: $resultado";
}
else{
    echo "Error.";
}

