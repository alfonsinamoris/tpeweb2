<?php
require_once 'libs/Smarty.class.php';

class InmoView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty

    }

    function showProperties($properties){
        // asigno variables al tpl smarty
        $this->smarty->assign('properties', $properties);

        // mostrar el tpl
        $this->smarty->display('templates/propiedades.tpl');
    } 

    function Logadmin(){
        $this->smarty->display('templates/administrador.tpl');
    }
    //muestra detalle
    function showProperty($property){
        $this->smarty->assign('property',$property); 
        $this->smarty->display('templates/detail.tpl'); 
    }
}