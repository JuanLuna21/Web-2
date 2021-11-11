<?php

require_once('lib/smarty-3.1.39/libs/Smarty.class.php');

class ViewMaterias
{
    private $smarty;

    function __construct()
    {
            $this->smarty = new Smarty();
    }

    function ShowMaterias($datos)
    {
         
        $this->smarty->assign('titulo',"Lista de materias");

        $this->smarty->assign('datos', $datos);

        $this->smarty->display('templates/home.tpl');
    
    }

    function ShowEdite($id){
        $this->smarty->assign('id', $id);
        $this->smarty->display('templates/update.tpl');
    }

    function mostrarMateria($materia){
        $this->smarty->assign('materias', $materia);
        $this->smarty->display('templates/materia.tpl');
    }

    function mostrarCarrera($carrera){
        $this->smarty->assign('carreras', $carrera);
        $this->smarty->display('templates/carreraselecionada.tpl');
    }



    function ShowHome(){
        header("Location: ".BASE_URL."home");
    }
    
}