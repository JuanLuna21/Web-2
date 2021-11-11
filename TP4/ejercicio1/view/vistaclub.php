<?php

require_once('lib/smarty-3.1.39/libs/Smarty.class.php');

class  clubview
{
    private $smarty;

    function __construct()
    {
            $this->smarty = new Smarty();
    }

    function ShowHome($habitaciones)
    {
         
        $this->smarty->assign('titulo',"Lista de materias");

        $this->smarty->assign('habitacionclub', $habitaciones);

        $this->smarty->display('templates/home.tpl');
    
    }

    function ShowCapacidad($capacidad)
    {
         
        $this->smarty->assign('titulo',"Lista de materias");

        $this->smarty->assign('capacidad', $capacidad);

        $this->smarty->display('templates/home.tpl');
    
    }

    function InsertarHabitacion()
    {
        ShowHome();
    
    }

    
}
