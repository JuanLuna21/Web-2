<?php

require_once 'controller/logincontroller.php';
require_once 'view/viewlogin.php';


class clubControllerlogin{
    
    private $modellogin;
    private $viewlogin;

    function __construct()
    {
        $this-> modellogin = new clubmodellogin;
        $this-> viewlogin = new loginview;
    }

    function showlogin($correo, $contraseña){
        $login = $this->modellogin->insertuser($correo, $contraseña);
        $this->viewlogin->showlogin($login);
    }

}


