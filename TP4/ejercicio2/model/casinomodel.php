<?php


class casinomodel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=juegostest;charset=utf8', 'root', '');
    }

    function showjuegos()
    {
        $sentencia = $this->db->prepare(" SELECT* FROM juegos");
        $sentencia->execute(array());
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    function InsertJuego($juego,$nombre,$si)
    {
        $sentencia = $this->db->prepare(" INSERT INTO juegos (nombre, cantidad_jugadores, juego_de_cartas)  VALUES (?, ?, ?)");
        $sentencia->execute(array($juego,$nombre,$si));
      
    }
}
