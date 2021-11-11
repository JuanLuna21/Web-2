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

    function insertMateria($materia, $profesor, $id_carrera)
    {
        $sentencia = $this->db->prepare("INSERT INTO materias (nombre, profesor, id_carrera) VALUES (?, ?, ?)");
        $sentencia->execute(array($materia, $profesor, $id_carrera));
    }

    function editarMaterias($id, $nombre, $profesor, $carrera)
    {
        $sentencia = $this->db->prepare("UPDATE  materias SET nombre=?, profesor=?, id_carrera=? WHERE id_materia=? ");
        $sentencia->execute(array($nombre, $profesor, $carrera, $id));
    }

    function delete($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM materias  WHERE id_materia=? ");
        $sentencia->execute(array($id));
    }

    function materiaSeleccionada($materia)
    {
        $sentencia = $this->db->prepare("SELECT * FROM materias  WHERE nombre=? ");
        $sentencia->execute(array($materia));
        $materia = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $materia;
    }

    function carreraSeleccionada($carrera)
    {
        $sentencia = $this->db->prepare("SELECT * FROM carreras  WHERE carrera=?");
        $sentencia->execute(array($carrera));
        $carrera = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $carrera;
    }

    function carreraSeleccionadas($carreras)
    {
        $sentencia = $this->db->prepare("SELECT * FROM carreras  WHERE duracion_carrera < ? ");
        $sentencia->execute(array($carreras));
        $carrera = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $carrera;
    }
}
