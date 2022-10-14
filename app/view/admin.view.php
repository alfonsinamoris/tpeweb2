<?php
require_once 'libs/Smarty.class.php';

class AdminView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty

    }
    function Logadmin($error = null){
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/administrador.tpl');
    }
}