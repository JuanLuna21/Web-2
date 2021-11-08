<?php


class modelMaterias
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=datebase_web;charset=utf8', 'root', '');
    }

    function getmaterias()
    {

        $sentencia = $this->db->prepare("SELECT * FROM materias ");
        $sentencia->execute();
        $materias = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $materias;

    }

    function insertMateria($materia,$profesor,$id_carrera)
    {
        $sentencia = $this->db->prepare("INSERT INTO materias (nombre, profesor, id_carrera) VALUES (?, ?, ?)");
        $sentencia->execute(array($materia,$profesor,$id_carrera));

    }

    function editarMaterias($id,$nombre,$profesor,$carrera)
    {
        $sentencia = $this->db->prepare("UPDATE  materias SET (nombre=?, profesor=?,carrera=? WHERE id_materia=? )");
        $sentencia->execute(array($id,$nombre,$profesor,$carrera));

    }
}
