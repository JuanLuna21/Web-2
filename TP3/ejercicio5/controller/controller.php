<?php

require_once './model/model.php';
require_once './view/view.php';

class controllerMaterias
{

    private $model;
    private $view;


    function __construct()
    {
        $this->model = new modelMaterias;
        $this->view = new ViewMaterias;
    }

    function ShowHome()
    {
        $materias = $this->model->getmaterias();
        $this->view->ShowMaterias($materias);
    }

    function insertMateria($materia, $profesor, $carrera)
    {
        $this->model->insertMateria($materia, $profesor, $carrera);
        $this->view->ShowHome();
    }

    function editarMaterias($id,$materia, $profesor, $carrera)
    {
        $this->model->editarMaterias($id,$materia, $profesor, $carrera);
        $this->view->ShowHome();
    }

    function delete ($id)
    {
        $this->model->delete($id);
        $this->view->ShowHome();
    }

    function materiaSeleccionada($materia)
    {
        $materiaAMostrar = $this->model->materiaSeleccionada($materia);
        $this->view->mostrarMateria($materiaAMostrar);
    }

    
    function carreraSeleccionada($carrera)
    {
        $carreraAMostrar = $this->model->carreraSeleccionada($carrera);
        $this->view->mostrarCarrera($carreraAMostrar);
    }

    function mostrarCarrera3Años($carreras)
    {
        $carrerasAMostrar = $this->model->carreraSeleccionadas($carreras);
        $this->view->mostrarCarrera($carrerasAMostrar);
    }

    function edite($id){
        $this->view->ShowEdite($id);
    }
}
