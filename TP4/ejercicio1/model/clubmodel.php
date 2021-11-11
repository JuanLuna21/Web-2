<?php


class clubmodel{

    private $db;

    
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=club_bolivar;charset=utf8', 'root', '');
    }


    function ListarHabitaciones(){
        $sentencia = $this->db->prepare(" SELECT* FROM habitacion");
        $sentencia->execute(array());
        $habitaciones = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $habitaciones;
    }

    function insertarHabitaciones($nro_habitacion,$cant_camas,$descipcio,$ocupada){
        $sentencia = $this->db->prepare("INSERT INTO habitacion nro_habitacion, cant_camas, descripcion, ocupada VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($nro_habitacion,$cant_camas,$descipcio,$ocupada));

    }

    function capacidad(){
        $sentencia = $this->db->prepare("SELECT SUM(Cant_camas) FROM habitacion");
        $sentencia->execute(array());
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

}