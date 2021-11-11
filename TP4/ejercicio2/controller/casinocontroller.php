<?php

require_once 'model/casinomodel.php';
require_once 'view/viewcasino.php';

class casinocontroller
{

    private $casinomodel;
    private $casinoview;

    function __construct()
    {
        $this->casinomodel = new casinomodel;
        $this->casinoview = new casinoview;
    }


    function showhome()
    {
        $juegos = $this->casinomodel->showjuegos();
        $this->casinoview->showhome($juegos);
    }

    function InsertJuego($nombre,$juego,$si)
    {  
        $cantjugadores = (int) $juego;
      //  if ($si) {
            $juego = $this->casinomodel->InsertJuego($nombre,$cantjugadores,$si);    
      //  }else{

          //  $juego = $this->casinomodel->InsertJuego($nombre,$cantjugadores,0);
        //}
     //   $this->casinoview->showhome($nombre,$cantjugadores,$si);
        $misjuegos = $this->casinomodel->showjuegos();
        $this->casinoview->showhome($misjuegos);
    }

}
