<?php

function UpdatePasaje($id_pasaje,$clase)
{
    $sentencia = $this->db->prepare("UPDATE  pasaje SET clase=? WHERE id=?");
    $sentencia->execute(array ($id_pasaje,$clase));
}


function deletevuelos($id)
{
    $sentencia = $this->db->prepare("DELETE FROM pasaje   WHERE id_materia=? ");
    $sentencia->execute(array($id));
}
