<?php



class clubmodellogin
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=club_bolivar;charset=utf8', 'root', '');
    }


    function insertuser($correo, $contraseña)
    {
        $sentencia = $this->db->prepare("INSERT INTO usuarios correo contraseña VALUES (?, ?)");
        $sentencia->execute(array($correo, $contraseña));
    }
}
