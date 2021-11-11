<?php

require_once('lib/smarty-3.1.39/libs/Smarty.class.php');

class casinoview
{
    private $smarty;

    function __construct()
    {
        $this->smarty= new Smarty;
    }

    function showhome($juegos)
    {
       $this->smarty->assign("juegos",$juegos);

       $this->smarty->display("templates/home.tpl");

    }

    function SinsertarJuego($juego)
    {
        showhome();
    }

    
}