<?php


require_once './model/clubmodel.php';
require_once './view/vistaclub.php';


class clubController{

    private $model;
    private $view;

    
    function __construct()
    {
        $this-> model = new clubmodel;
        $this-> view = new clubview;
    }


    function ShowHome(){
        $habitaciones  = $this->model->ListarHabitaciones();
        $this->view->ShowHome($habitaciones);
    }

    function  InsertarHabitacion($nro_habitacion,$cant_camas,$descripcion,$ocupada){

        $habitacion = $this->model->insertarHabitaciones($nro_habitacion,$cant_camas,$descripcion,$ocupada);
        $this->view->InsertarHabitacion($habitacion);

    }

    function  capacidadHotelera(){

        $capacidad= $this->model->capacidad();
        $this->view->ShowCapacidad($capacidad);

    }

}